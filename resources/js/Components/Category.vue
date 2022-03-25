<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps(["categories"]);

</script>
<template>
  <aside class="w-full sm:w-1/3 md:1/4 px-2">
    <div
      class="sticky top-0 py-4 w-full rounded-md ring-1 ring-slate-900/5 bg-slate-700 text-slate-100 text-center px-1"
    >
      <h4>分類</h4>
      <hr />
      <ul>
        <li
          class="mt-1 rounded bg-sky-500 group hover:bg-sky-500 border border-solid border-sky-500"
        >
          <Link
            :href="route('homepage')"
            class="text-slate-100 group-hover:text-slate-100 block w-full py-2"
            >全部</Link
          >
        </li>
        <li
          v-for="category in categories"
          class="mt-1 rounded bg-slate-100 group hover:bg-sky-500 border border-solid border-sky-500"
        >
          <Link
            :href="route('category',{category:category.id})" :only="['products']" :preserveState="true"
            class="text-slate-600 group-hover:text-slate-100 block w-full py-2"
            >{{ category.name }}</Link
          >
        </li>
      </ul>
    </div>
  </aside>
</template>
