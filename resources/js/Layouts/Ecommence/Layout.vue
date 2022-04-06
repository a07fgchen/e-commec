<script setup>
import NavBar from "@/Components/Ecommence/NavBar";
import Footer from "@/Components/Ecommence/Footer"
</script>

<template>
  <div class="from-slate-300 bg-gradient-to-tl">
    <section>
      <NavBar />
    </section>
    <section class="min-h-screen">
      <slot />
    </section>
    <Footer />
  </div>
</template>
