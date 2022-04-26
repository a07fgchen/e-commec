<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
    'name':null,
    'sku':null,
    'name':null,
})
</script>

<template>
  <Head title="Admin Products" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create</h2>
    </template>

    <div class="py-6">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-3">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <form @submit.prevent="">
                
            </form>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
