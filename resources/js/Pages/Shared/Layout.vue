<script setup>
import Nav from "@/Pages/Shared/Nav";
</script>
<template>
  <section class="p-6 bg-gray-200">
    <header class="flex justify-between">
      <div class="flex items-center">
        <h1 class="font-bold text-lg">
          My APP
        </h1>
        <p class="font-bold text-lg space-x-1">
          Welcome Back, {{ $page.props.user.username }}
        </p>
      </div>
      <Nav />
    </header>
  </section>
  <section class="p-6">
    <div class="max-w-3xl mx-auto">
      <slot />
    </div>
  </section>
</template>
