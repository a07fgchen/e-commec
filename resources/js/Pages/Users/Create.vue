<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

let form = reactive({
  name: "",
  email: "",
  password: "",
});

defineProps({
  errors:Object
})

let submit = () => {
  Inertia.post(route("users"), form);
};
</script>
<template>
  <Head title="Create User" />

  <h1 class="text-3xl">Create</h1>

  <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
    <div class="mt-6">
      <label
        for="email"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
      >
        name
      </label>
      <input
        v-model="form.name"
        class="border border-grap-400 p2 w-full rounded"
        type="text"
        name="name"
        id="name"
      />
      <div
        v-if="errors.name"
        v-text="errors.name"
        class="text-red-500 text-xs mt-1"
      ></div>
    </div>
    <div class="mt-6">
      <label
        for="email"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
      >
        Email
      </label>
      <input
        v-model="form.email"
        class="border border-grap-400 py-2 w-full rounded"
        type="email"
        name="email"
        id="email"
      />
      <div
        v-if="errors.email"
        v-text="errors.email"
        class="text-red-500 text-xs mt-1"
      ></div>
    </div>
    <div class="mt-6">
      <label
        for="password"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
      >
        password
      </label>
      <input
        v-model="form.password"
        class="border border-grap-400 py-2 w-full rounded"
        type="password"
        name="password"
        id="password"
      />
      <div
        v-if="errors.password"
        v-text="errors.password"
        class="text-red-500 text-xs mt-1"
      ></div>
    </div>
    <div class="mt-6">
      <button
        class="bg-blue-400 text-white p-2 rounded hover:bg-blue-500"
        type="submit"
      >
        submit
      </button>
    </div>
  </form>
</template>