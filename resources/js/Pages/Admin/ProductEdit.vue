<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
  product: Object,
});

const form = useForm({
  name: props.product.name,
  sku: props.product.sku,
});

function send(id) {
  form.put(route("admin.product.update", { id }), {
    onSuccess: () => {
      alert("updated");
    },
  });
}
</script>

<template>
  <Head title="Admin Products" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Product</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <form @submit.prevent="send(product.id)">
            <div class="p-3 bg-white border-b border-gray-200">
              <div class="flex items-center text-center">
                <div class="basis-1/3">
                  <label for="name"> 商品名稱 </label>
                </div>
                <div class="basis-2/3">
                  <input type="text" v-model="form.name" />
                </div>
              </div>
              <div class="flex items-center text-center">
                <div class="basis-1/3">
                  <label for="name"> sku </label>
                </div>
                <div class="basis-2/3">
                  <input type="text" v-model="form.sku" />
                </div>
              </div>
              <div class="flex items-center justify-end text-center">
                <div class="basis-2/3">
                  <button type="submit">確定</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
