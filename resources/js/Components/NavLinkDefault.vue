<script setup>
import { Link } from "@inertiajs/inertia-vue3";

</script>

<template>
  <Link class="rounded-md bg-slate-100 p-1 text-slate-700 border-slate-700 border-2 focus:border-sky-500">
    <slot />
  </Link>
</template>
