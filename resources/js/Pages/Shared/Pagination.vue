<script setup>
defineProps({ links: Array });
</script>
<template>
  <div>
    <Component
      :is="link.url ? 'Link' : 'span'"
      v-for="link in links"
      :href="link.url"
      v-html="link.label"
      :key="link.label"
      class="px-1"
      :class="{ 'text-gray-500': !link.url, 'text-blue-500': link.active }"
    />
  </div>
</template>