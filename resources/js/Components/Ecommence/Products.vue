<script setup>
defineProps({
  activehref: Boolean,
  products: Array,
});
</script>
<template>
  <div class="flex flex-wrap justify-around mt-5">
    <div
      class="basis-full md:basis-1/5 hover:-translate-y-1.5 transition-transform"
      v-for="product in products"
      :key="product.id"
    >
      <template v-if="activehref">
        <Link :href="route('products.detail',{id:product.id})">
          <img class="w-full" :src="product.gallery.image" :alt="product.name" />
        </Link>
      </template>
      <template v-else>
        <img class="w-full" :src="product.gallery.image" :alt="product.name" />
      </template>

      <h4 class="text-sm font-bold">{{ product.name }}</h4>
      <!-- <div class="rating">&#9733;</div>
      <p class="text-sm">${{ product.price }}</p> -->
    </div>
    <!-- <div class="basis-1/4">
      <img class="w-full" src="images/products/product-2.jpg" alt="" />
      <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
      <div class="rating">&#9733;</div>
      <p class="text-sm">$50.00</p>
    </div>
    <div class="basis-1/4">
      <img class="w-full" src="images/products/product-3.jpg" alt="" />
      <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
      <div class="rating">&#9733;</div>
      <p class="text-sm">$50.00</p>
    </div>
    <div class="basis-1/4">
      <img class="w-full" src="images/products/product-4.jpg" alt="" />
      <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
      <div class="rating">&#9733;</div>
      <p class="text-sm">$50.00</p>
    </div> -->
  </div>
</template>