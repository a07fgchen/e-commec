<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
  user: Object,
});

const form = useForm({
  name: props.user.name,
  email: props.user.email,
  is_admin: props.user.is_admin,
});

function send(id) {
  form.put(route("admin.user.update", { id }), {
    onSuccess: () => {
      alert("updated");
    },
  });
}
</script>

<template>
  <Head title="Dashboard" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        User Edit
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div
            class="py-6 px-5 text-center bg-white border-b border-gray-200 h-80"
          >
            <form
              method="post"
              class="space-y-5"
              @submit.prevent="send(user.id)"
            >
              <div class="flex justify-center">
                <div class="basis-1/3"><label for="name">User Name</label></div>
                <div class="basis-2/3">
                  <input
                    id="name"
                    type="text"
                    v-model="form.name"
                    class="bg-transparent border-sky-500 focus:border-sky-700"
                  />
                </div>
              </div>
              <div class="flex justify-center">
                <div class="basis-1/3"><label for="email">Email</label></div>
                <div class="basis-2/3">
                  <input
                    id="email"
                    type="email"
                    v-model="form.email"
                    class="bg-transparent border-sky-500 focus:border-sky-700"
                  />
                </div>
              </div>
              <div class="flex justify-end">
                <div class="basis-1/3">
                  <label for="isadmin"> 是否為管理者 </label>
                </div>
                <div class="basis-2/3">
                  <input
                    id="isadmin"
                    type="radio"
                    name="isadmin"
                    :value="!form.is_admin"
                    v-model="form.is_admin"
                  />
                </div>
              </div>
              <div class="flex justify-end">
                <div class="basis-2/3">
                  <button
                    type="submit"
                    class="
                      bg-sky-500
                      hover:bg-sky-700
                      p-2
                      rounded-md
                      ring-1 ring-blue-600
                      text
                    "
                    :disabled="form.processing"
                  >
                    修改
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
