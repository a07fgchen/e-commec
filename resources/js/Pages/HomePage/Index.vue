<template>
  <div id="description" class="flex px-6 pt-12 md:px-12 justify-center items-center">
    <div class="basis-1/2">
      <h1 class="text-3xl font-bold">Lorem, ipsum. <br />Lorem ipsum dolor sit.</h1>
      <p class="mt-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
        doloremque obcaecati hic maiores dolore! Voluptate unde doloremque
        voluptates, praesentium vitae consequuntur hic ipsum id repudiandae ad
        dolore non cum neque?
      </p>
      <Link as="button" class="border-2 border-sky-500 rounded-full p-3 mt-5 hover:bg-sky-600 hover:text-white text-sm">開始介紹 &#8594</Link>
    </div>
    <div class="basis-1/2">
        <img src="images/image1.png">
    </div>    
  </div>
  <div id="catrgory">
      <div class="flex mx-auto space-x-2 container mt-12">
          <div class="basis-1/3">
            <img src="images/category/category-1.jpg" alt="">
          </div>
          <div class="basis-1/3">
                <img src="images/category/category-2.jpg" alt="">
          </div>
          <div class="basis-1/3">
                <img src="images/category/category-3.jpg" alt="">
          </div>
      </div>
  </div>
  <div id="product">
      <div class="container mx-auto mt-12">
        <h2 class="text-xl font-bold mx-auto text-center">Feature Products</h2>
        <div class="flex justify-center space-x-2 mt-3">
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-1.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-2.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-3.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-4.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p>$50.00</p>
                </div>
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