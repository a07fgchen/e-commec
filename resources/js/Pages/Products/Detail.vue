<script setup>
import { ref } from "vue";
defineProps({
  products: Object,
});

let path = ref("/images/gallery-1.jpg");

function getUrl(event) {
  path.value = event.target.src;
}
</script>
<template>
  <div class="container mx-auto mt-5">
    <div class="flex">
      <div class="basis-1/2">
        <img :src="path" class="w-full" />
        <div class="flex justify-between mt-4">
          <img
            v-for="gallery in products.galleries"
            :key="gallery.id"
            :src="gallery.image"
            @click="getUrl"
            class="w-1/5 cursor-pointer"
          />
          <!-- <img
            src="/images/gallery-2.jpg"
            @click="getUrl"
            class="w-1/5 cursor-pointer"
          />
          <img
            src="/images/gallery-3.jpg"
            @click="getUrl"
            class="w-1/5 cursor-pointer"
          />
          <img
            src="/images/gallery-4.jpg"
            @click="getUrl"
            class="w-1/5 cursor-pointer"
          /> -->
        </div>
      </div>
      <div class="basis-1/2 px-4">
        <p>Home / T-shirt</p>
        <h1 class="text-3xl font-extrabold">Red Printed T-shirt by HRX</h1>
        <h4 class="font-extrabold mt-3 text-slate-700/75">$50.00</h4>
        <div class="mt-3">
          <h3 class="text-2xl font-bold">Product Datail</h3>
          <p class="text-md">
            Lorem ipsum dolor sit amet consectetur. Eius, maxime voluptas!
            Maiores, optio suscipit. Id eos quo quibusdam ut possimus!
          </p>
        </div>
        <div class="flex space-x-3">
          <select class="rounded-lg h-10 w-1/3">
            <option value="">Select Size</option>
            <option
              v-text="products.size"
            ></option>
         
          </select>
          <input
            type="number"
            value="1"
            min="0"
            class="rounded-lg h-10 w-14 px-2"
          />
          <button type="button" class="bg-sky-500 p-2 rounded-lg w-2/4">
            Add to Cart
          </button>
        </div>
      </div>
    </div>
    <h1 class="text-xl font-bold mt-10">Related</h1>
    <div class="flex justify-center space-x-2">
      <div class="basis-1/4">
        <img
          class="w-full hover:-translate-y-1.5 transition-transform"
          src="/images/products/product-9.jpg"
          alt=""
        />
        <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
        <div class="rating">&#9733;</div>
        <p class="text-sm">$50.00</p>
      </div>
      <div class="basis-1/4">
        <img class="w-full" src="/images/products/product-10.jpg" alt="" />
        <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
        <div class="rating">&#9733;</div>
        <p class="text-sm">$50.00</p>
      </div>
      <div class="basis-1/4">
        <img class="w-full" src="/images/products/product-11.jpg" alt="" />
        <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
        <div class="rating">&#9733;</div>
        <p class="text-sm">$50.00</p>
      </div>
      <div class="basis-1/4">
        <img class="w-full" src="/images/products/product-12.jpg" alt="" />
        <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
        <div class="rating">&#9733;</div>
        <p class="text-sm">$50.00</p>
      </div>
    </div>
  </div>
</template>
<script>
import Layout from "@/Layouts/Ecommence/Layout";

export default {
  layout: Layout,
};
</script>