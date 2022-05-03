<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, useForm } from "@inertiajs/inertia-vue3";
import SelectSize from "@/Components/Ecommence/SelectSize.vue";

defineProps({
  categories: Object,
});

let form = useForm({
  category_id: "",
  spu: "",
  name: "",
  description: "",
});
</script>

<template>
  <Head title="Admin Products" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        新增產品
      </h2>
    </template>

    <div class="py-6">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-3">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
          <form @submit.prevent="form.post(route('admin.product.store'))">
            <div class="p-3 bg-white border-gray-200">
              <div class="flex items-center text-center">
                <div class="basis-1/3">
                  <label for="name"> 產品名稱 </label>
                </div>
                <div class="basis-2/3">
                  <input type="text" v-model="form.name" />
                </div>
              </div>
              <div class="flex items-center text-center">
                <div class="basis-1/3">
                  <label for="name"> 產品編號 </label>
                </div>
                <div class="basis-2/3">
                  <input type="text" v-model="form.spu" />
                </div>
              </div>
              <div class="flex items-center text-center">
                <div class="basis-1/3">
                  <label for="name"> 產品描述 </label>
                </div>
                <div class="basis-2/3">
                  <textarea type="text" v-model="form.description" />
                </div>
              </div>
              <div class="flex items-center text-center">
                <div class="basis-1/3">
                  <label for="size"> 產品分類 </label>
                </div>
                <div class="basis-2/3">
                  <select
                    name="category"
                    id="category"
                    v-model="form.category_id"
                  >
                    <option value="" disabled>請選擇產品分類</option>
                    <option
                      :value="category.id"
                      v-for="category in categories"
                      :key="category.id"
                    >
                      {{ category.name }}
                    </option>
                  </select>
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
