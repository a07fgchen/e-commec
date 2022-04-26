<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/inertia-vue3";

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
        Products
      </h2>
    </template>

    <div class="py-6">
      <div class="py-6 max-w-xs ml-auto">
        <Link :href="route('admin.product.create')"> Add New Product </Link>
      </div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table class="bg-white w-full text-center">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="p-3">#</th>
              <th class="p-3">Product Name</th>
              <th class="p-3">Product SPU</th>
              <th class="p-3">-</th>
              <th class="p-3">-</th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="border-b border-gray-200"
              v-for="(product, index) in products"
              :key="product.id"
            >
              <td class="p-3">{{ index + 1 }}</td>
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
    </div>
  </BreezeAuthenticatedLayout>
</template>
