<script setup>
import Products from "@/Components/Ecommence/Products";
import Pagination from "@/Components/Ecommence/Pagination";
import { Inertia } from "@inertiajs/inertia";
import { ref, watch } from "vue";

defineProps({
  products: Object,
});

let search = ref("");

watch(
  search,
  _.throttle(function (value) {
    Inertia.get(
      route("products.index"),
      { search: value },
      {
        preserveState: true,
        replace: true,
      }
    );
  }, 500)
);
</script>

<template>
  <div class="container mx-auto mt-10">
    <div class="flex justify-between">
      <h2 class="text-xl text-center basis-2/3">All Products</h2>
      <div class="basis-1/3 flex bg-white border">
        <input type="text" class="bg-transparent w-full" v-model="search" placeholder="搜尋..." />
        <!-- <svg
          class="text-black"
          xmlns="http://www.w3.org/2000/svg"
          className="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          strokeWidth="{2}"
        >
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
          />
        </svg> -->
      </div>
    </div>
    <Products class="space-x-2" activehref :products="products.data" />
    <div class="flex justify-end mt-5 space-x-3">
      <Pagination class="space-x-3" :links="products.links" />
    </div>
  </div>
</template>

<script>
import Layout from "@/Layouts/Ecommence/Layout";

export default {
  layout: Layout,
};
</script>