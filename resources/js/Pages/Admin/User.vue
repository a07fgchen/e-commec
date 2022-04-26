<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
  users: Object,
});
</script>

<template>
  <Head title="Dashboard" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">User</h2>
    </template>

    <div class="py-12">
      <div
        class="max-w-7xl mx-auto sm:px-6 lg:px-8"
        v-for="user in users"
        :key="user.id"
      >
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div
            class="
              p-3
              bg-white
              border-b border-gray-200
              flex flex-between
              items-center
              text-center
            "
          >
            <div class="basis-1/4">
              {{ user.name }}
            </div>
            <div class="basis-1/4">
              {{ user.email }}
            </div>
            <div class="basis-1/4">
              <Link
                :href="route('admin.user.edit', { id: user.id })"
                as="button"
                type="button"
                class="border rounded-md bg-red-500 px-3 py-2"
              >
                Edit
              </Link>
            </div>
            <div class="basis-1/4">
              <Link
                :href="route('admin.user.delete', { id: user.id })"
                as="button"
                type="button"
                method="delete"
                class="border rounded-md bg-red-500 px-3 py-2"
              >
                Delete
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
