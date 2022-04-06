<script setup>
import Products from "@/Components/Ecommence/Products";
</script>

<template>
  <div class="container mx-auto mt-10">
    <div class="flex justify-between">
      <h2 class="text-xl text-center basis-2/3">All Products</h2>
      <select name="sort" class="basis-1/3">
        <option value="">Default Sorting</option>
        <option value="">sort by price</option>
        <option value="">sort by popularity</option>
        <option value="">sort by sale</option>
      </select>
    </div>
    <Products />
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