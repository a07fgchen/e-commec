<script setup>
defineProps({
  items: Object,
});
</script>

<template>
  <table class="bg-white w-full text-center">
    <thead>
      <tr class="border-b border-gray-200">
        <slot name="colname" />
      </tr>
    </thead>
    <tbody>
      <tr
        class="border-b border-gray-200"
        v-for="item in items"
        :key="item.id"
      >
        <td class="p-3">{{ items.id }}</td>
        <td class="p-3">{{ items.name }}</td>
        <td class="p-3">{{ items.sku }}</td>
        <td class="p-3">
          <Link :href="route('admin.product.edit', product.id)"> Edit </Link>
        </td>
        <td>
          <button type="button" @click="deleteItem(product.id)">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</template>