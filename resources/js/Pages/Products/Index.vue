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

      <input
        type="text"
        class="basis-1/3"
        v-model="search"
        placeholder="搜尋..."
      />
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