<script setup>
    defineProps({
        size:String
    })
</script>

<template>
  <div>
    <select name="size" id="size" v-model="size">
      <option value="" disabled>請選擇尺寸</option>
      <option value="s">s</option>
      <option value="m">m</option>
      <option value="l">l</option>
      <option value="xl">xl</option>
      <option value="xxl">xxl</option>
    </select>
  </div>
</template>