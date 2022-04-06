<script setup>
import Products from "@/Components/Ecommence/Products";
</script>
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
      <div class="container mx-auto mt-20">
        <h2 class="text-xl font-bold text-center relative after:content-[''] after:-translate-x-1/2 after:bg-sky-500 after:w-20 after:h-1 after:absolute after:left-1/2 after:-bottom-1">Feature Products</h2>
        <Products activehref />
        <h2 class="text-xl font-bold text-center relative after:content-[''] after:-translate-x-1/2 after:bg-sky-500 after:w-20 after:h-1 after:absolute after:left-1/2 after:-bottom-1 mt-10">Latest Products</h2>
        <div class="flex justify-center space-x-2 mt-5">
                <div class="basis-1/4">
                    <img class="w-full hover:-translate-y-1.5 transition-transform" src="images/products/product-5.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-6.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-7.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-8.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
        </div>
        <div class="flex justify-center space-x-2 mt-5">
                <div class="basis-1/4">
                    <img class="w-full hover:-translate-y-1.5 transition-transform" src="images/products/product-9.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-10.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-11.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
                <div class="basis-1/4">
                    <img class="w-full" src="images/products/product-12.jpg" alt="">
                    <h4 class="text-sm font-bold">Red Printed T-Shirt</h4>
                    <div class="rating">
                        &#9733;
                    </div>
                    <p class="text-sm">$50.00</p>
                </div>
        </div>
      </div>
  </div>
      <div id="offer">
        <div class="container mx-auto mt-40">
          <div class="flex justify-center items-center">
            <div class="basis-1/2">
              <img src="images/exclusive.png" class="w-full">
            </div>
            <div class="basis-1/2">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <h1>Lorem, ipsum dolor.</h1>
              <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, qui. Officiis, explicabo. Nulla obcaecati assumenda nobis dignissimos blanditiis in veniam dolores pariatur odit temporibus, earum distinctio nostrum minima corporis dicta?</small>
              <br />
              <Link as="button" class="border-2 border-sky-500 rounded-full p-3 mt-5 hover:bg-sky-600 hover:text-white text-sm">開始介紹 &#8594</Link>
            </div>
          </div>
        </div>
      </div>
      <div id="user">
          <div class="container mx-auto mt-40">
              <div class="flex text-center justify-center items-center space-x-2">
                  <div class="basis-1/3 border border-sky-500 rounded-sm hover:-translate-y-10 transition-transform">
                    <p>Lorem ipsum dolor sit, 
                        amet consectetur adipisicing elit. 
                        Accusantium, possimus.
                    </p>
                    &#9733;
                    <img src="images/user-1.png" class="w-1/2 mx-auto rounded-full" />
                    <h3 class="text-lg">Sean Parker</h3>
                  </div>
                  <div class="basis-1/3 border border-sky-500 rounded-sm hover:-translate-y-10 transition-transform">
                    <p>Lorem ipsum dolor sit, 
                        amet consectetur adipisicing elit. 
                        Accusantium, possimus.
                    </p>
                    &#9733;
                    <img src="images/user-2.png" class="w-1/2 mx-auto rounded-full" />
                    <h3 class="text-lg">Sean Parker</h3>
                  </div>
                  <div class="basis-1/3 border border-sky-500 rounded-sm hover:-translate-y-10 transition-transform">
                    <p>Lorem ipsum dolor sit, 
                        amet consectetur adipisicing elit. 
                        Accusantium, possimus.
                    </p>
                    &#9733;
                    <img src="images/user-3.png" class="w-1/2 mx-auto rounded-full" />
                    <h3 class="text-lg">Sean Parker</h3>
                  </div>
              </div>
          </div>
      </div>
      <div id="brands">
          <div class="container mt-20 mx-auto">
              <div class="flex">
                  <div class="basis-1/5">
                    <img src="images/logo-godrej.png" class="w-full cursor-pointer filter grayscale hover:filter-none" alt="">
                  </div>
                  <div class="basis-1/5">
                    <img src="images/logo-oppo.png" alt="" class="w-full cursor-pointer filter grayscale hover:filter-none">
                  </div>
                  <div class="basis-1/5">
                    <img src="images/logo-coca-cola.png" alt="" class="w-full cursor-pointer filter grayscale hover:filter-none">
                  </div>
                  <div class="basis-1/5">
                    <img src="images/logo-paypal.png" alt="" class="w-full cursor-pointer filter grayscale hover:filter-none">
                  </div>
                  <div class="basis-1/5">
                    <img src="images/logo-philips.png" alt="" class="w-full cursor-pointer filter grayscale hover:filter-none">
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