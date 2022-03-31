<script setup>
import NavBar from "@/Components/Ecommence/NavBar";
</script>

<template>
  <section>
    <NavBar />
  </section>
  <section class="p-6">
    <div class="max-w-6xl mx-auto">
      <slot />
    </div>
  </section>
</template>
