<script setup>
import { Link } from "@inertiajs/inertia-vue3";
defineProps({
  active: Boolean,
});
</script>
<template>
  <Link class="text-blue-500 block md:w-auto md:static md:hover:underline" 
  :class="{'font-bold bg-black md:bg-inherit md:underline':active}">
    <slot />
  </Link>
</template>
