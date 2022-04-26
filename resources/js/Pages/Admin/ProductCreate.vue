<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, useForm } from "@inertiajs/inertia-vue3";

defineProps({
  products: Object,
});

let form = useForm({
  id: "",
  descrtion: "",
  sku: "",
  quantity: 0,
  size: "",
});
</script>

<template>
  <Head title="Admin Products" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create Product
      </h2>
    </template>

    <div class="py-6">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-3">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
          <form @submit.prevent="form.put(route('admin.product.create'))">
            <div class="flex flex-wrap justify-center items-center text-center">
              <div class="basis-1/3">
                <label for="descrtion"> 商品名稱 </label>
              </div>
              <div class="basis-2/3">
                <select name="descrtion" id="descrtion" v-model="form.id">
                  <option value="" disabled>請選擇商品</option>
                  <option
                    :value="product.id"
                    v-for="product in products"
                    :key="product.id"
                  >
                    {{ product.name }}
                  </option>
                </select>
              </div>
            </div>
            <div class="flex flex-wrap justify-center items-center text-center">
              <div class="basis-1/3">
                <label for="descrtion"> 商品描述 </label>
              </div>
              <div class="basis-2/3">
                <input type="text" v-model="form.descrtion" />
              </div>
            </div>
            <div class="flex flex-wrap justify-center items-center text-center">
              <div class="basis-1/3">
                <label for="size"> 商品尺寸 </label>
              </div>
              <div class="basis-2/3">
                <select name="size" id="size" v-model="form.size">
                  <option value="" disabled>請選擇尺寸</option>
                  <option value="s">s</option>
                  <option value="m">m</option>
                  <option value="l">l</option>
                  <option value="xl">xl</option>
                  <option value="xxl">xxl</option>
                </select>
              </div>
            </div>
            <div class="flex flex-wrap justify-center items-center text-center">
              <div class="basis-1/3">
                <label for="quantity"> 商品數量 </label>
              </div>
              <div class="basis-2/3">
                <input
                  type="number"
                  min="0"
                  v-model="form.quantity"
                  id="quantity"
                />
              </div>
            </div>
            <div class="flex justify-end text-center">
              <div class="basis-2/3">
                <button class="p-3">新增</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
