<script setup>
import NavBar from "@/Components/Ecommence/NavBar";
</script>

<template>
  <div class="from-slate-300 bg-gradient-to-tl min-h-screen pb-5">
    <section>
      <NavBar />
    </section>
    <section>
      <slot />
    </section>
  </div>
</template>
