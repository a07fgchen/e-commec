<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Ecommence/Pagination";

defineProps({
  products: Object,
});

function deleteItem(id) {
  Inertia.delete(route("admin.product.delete", { id }), {
    onSuccess: () => {
      alert("Deleted");
    },
  });
}
</script>

<template>
  <Head title="Admin Products" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        產品品項 
      </h2>
    </template>

    <div class="py-6">
      <div class="flex justify-end items-center">
        <div class="basis-1/3">
          <Link :href="route('admin.spu.create')"> 新增產品 </Link>
        </div>
      </div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table class="bg-white w-full text-center">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="p-3">#</th>
              <th class="p-3">產品名稱</th>
              <th class="p-3">產品編號</th>
              <th class="p-3">-</th>
              <th class="p-3">-</th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="border-b border-gray-200"
              v-for="product in products.data"
              :key="product.id"
            >
              <td class="p-3">{{ product.id }}</td>
              <td class="p-3">{{ product.name }}</td>
              <td class="p-3">{{ product.spu }}</td>
              <td class="p-3">
                <Link :href="route('admin.product.edit', product.id)">
                  Edit
                </Link>
              </td>
              <td>
                <button type="button" @click="deleteItem(product.id)">
                  Delete
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="p-6 max-w-7xl flex justify-end">
        <Pagination :links="products.links" class="space-x-10" />
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
