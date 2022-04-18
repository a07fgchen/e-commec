<script setup>
import Products from "@/Components/Ecommence/Products";
import { Inertia } from "@inertiajs/inertia";
import { ref, watch } from "vue";

defineProps({
  products: Object,
});

let sorting = ref("");

watch(sorting, function (newSort) {
  Inertia.get(route("products"), { search: newSort });
});
</script>

<template>
  <div class="container mx-auto mt-10">
    <div class="flex justify-between">
      <h2 class="text-xl text-center basis-2/3">All Products</h2>
      <select name="sort" class="basis-1/3" v-model="sorting">
        <option value="" disabled>Default Sorting</option>
        <option value="price">sort by price</option>
        <option value="popularity">sort by popularity</option>
        <option value="sale">sort by sale</option>
      </select>
    </div>
    <Products class="space-x-2" activehref :products="products" />
    <div class="flex justify-end mt-5 space-x-3">
      <a href=""> 連結1 </a>
      <a href=""> 連結2 </a>
      <a href=""> 連結3 </a>
    </div>
  </div>
</template>

<script>
import Layout from "@/Layouts/Ecommence/Layout";

export default {
  layout: Layout,
};
</script>