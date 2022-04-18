<script setup>
import { reactive } from "vue";
import { watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
  product: Object,
  auth: Object,
});

let detail = reactive({
  ...props.product.product_details[0],
  quantity: 1,
  image: props.product.product_details[0].galleries[0].image,
});

watch(
  () => detail.id,
  (value) => {
    let result = props.product.product_details.find(function (element) {
      return element.id === value;
    });
    detail.price = result.price;
    detail.image = result.galleries[0].image;
    detail.size = result.size;
    detail.galleries = result.galleries;
  }
);

function changeImage(event) {
  detail.image = event.target.src;
}

function addToCart() {
  let cart = JSON.parse(localStorage.getItem("cart")) ?? [];
  let data = JSON.parse(JSON.stringify(detail));
  
  data.name = props.product.name;
  delete data.image;
  delete data.galleries;
  cart.push(data);

  if (props.auth) {
    Inertia.post(route("cart.create"), { product: cart });
  } else {
    localStorage.setItem("cart", JSON.stringify(cart));
    alert("以新增至資料庫");
  }
}
</script>
<template>
  <div class="container mx-auto mt-5">
    <div class="flex">
      <div class="basis-1/2">
        <img :src="detail.image" class="w-full" />
        <div class="flex justify-between mt-4">
          <img
            v-for="gallery in detail.galleries"
            :key="gallery.id"
            :src="gallery.image"
            class="w-1/5 cursor-pointer"
            @click="changeImage($event)"
          />
        </div>
      </div>
      <div class="basis-1/2 px-4">
        <p>Home / T-shirt</p>
        <h1 class="text-3xl font-extrabold">{{ product.name }}</h1>
        <h4 class="font-extrabold mt-3 text-slate-700/75">
          價格: {{ detail.price }}
        </h4>
        <div class="mt-3">
          <h3 class="text-2xl font-bold">Product Datail</h3>
          <p class="text-md mt-2">
            {{ product.description }}
          </p>
        </div>
        <div class="flex space-x-3 mt-3">
          <select class="rounded-lg h-10 w-1/3" v-model="detail.id">
            <option value="" disabled>選擇尺寸</option>
            <option
              v-for="detail in product.product_details"
              :key="detail.id"
              :value="detail.id"
              v-text="detail.size"
            ></option>
          </select>
          <input
            type="number"
            min="1"
            class="rounded-lg h-10 w-14 px-2"
            v-model="detail.quantity"
          />
          <button
            @click="addToCart"
            type="button"
            class="bg-sky-500 p-2 rounded-lg w-2/4"
          >
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