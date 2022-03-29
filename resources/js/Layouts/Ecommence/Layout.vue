<script setup>
import Nav from "@/Components/Ecommence/Nav";
</script>

<template>
  <section>
    <header class="p-4 flex justify-between bg-gray-200">
      <h1 class="text-2xl font-bold">Logo</h1>

      <Nav />
    </header>
  </section>

  <section class="p-6">
    <div class="max-w-6xl mx-auto">
      <slot />
    </div>
  </section>
</template>
