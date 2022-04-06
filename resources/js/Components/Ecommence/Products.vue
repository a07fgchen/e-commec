<script setup>
defineProps({
  activehref: Boolean,
});
</script>
<template>
  <div class="flex justify-center space-x-2 mt-5">
    <div class="basis-1/4 hover:-translate-y-5 transition-transform">
      <template v-if="activehref">
        <Link :href="route('products')">
          <img
            class="w-full"
            src="images/products/product-1.jpg"
            alt=""
          />
        </Link>
      </template>
      <template v-else>
        <img
          class="w-full"
          src="images/products/product-1.jpg"
          alt=""
        />
      </template>

      <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
      <div class="rating">&#9733;</div>
      <p class="text-sm">$50.00</p>
    </div>
    <div class="basis-1/4">
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
    </div>
  </div>
</template>