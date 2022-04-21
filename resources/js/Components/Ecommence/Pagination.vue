<script setup>
defineProps({
  links: Object,
});
</script>
<template>
  <div>
    <Component 
    :is="link.url ? 'Link' : 'span'" 
    v-for="(link,index) in links"
    :href="link.url"
    v-html="link.label"
    :key="index" />
  </div>
</template>