<script setup>
import Pagination from "@/Pages/Shared/Pagination";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
const props = defineProps({
  users: Object,
  filters: Object,
});

let search = ref(props.filters.search);

watch(search, (value) => {
  Inertia.get(
    "/users",
    { search: value },
    {
      preserveState: true,
      replace: true,
    }
  );
});
</script>
<template>
  <Head title="Users">
    <meta name="description" content="Users page" head-key="description" />
  </Head>

  <div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex justify-between">
      <div class="flex items-center">
        <h1 class="text-3xl">Users</h1>

        <Link
          class="text-blue-500 hover:underline text-sm ml-3"
          :href="route('users.create')"
        >
          New User
        </Link>
      </div>
      <input
        type="text"
        v-model="search"
        class="rounded-lg border px-2"
        name="seach"
        placeholder="Seach..."
      />
    </div>

    <div class="px-3 py-4 flex justify-center">
      <table class="w-full text-md bg-white shadow-md rounded mb-4">
        <tbody>
          <tr class="border-b">
            <th class="text-left p-3 px-5">Name</th>
            <th class="text-left p-3 px-5">Email</th>
            <th class="text-left p-3 px-5">Role</th>
            <th></th>
          </tr>
          <tr
            class="border-b hover:bg-orange-100 bg-gray-100"
            v-for="user in users.data"
            :key="user.id"
          >
            <td class="p-3 px-5">
              <input
                type="text"
                :value="user.name"
                disabled
                class="bg-transparent border-0 rounded"
              />
            </td>
            <td class="p-3 px-5">
              <input
                type="text"
                :value="user.email"
                disabled
                class="bg-transparent border-0 rounded"
              />
            </td>
            <td class="p-3 px-5">
              <select class="bg-transparent border-0 rounded" disabled>
                <option value="user" selected>user</option>
                <option value="admin">admin</option>
              </select>
            </td>
            <td class="p-3 px-5 flex justify-center">
              <Link
                :href="route('user.edit', { id: user.id })"
                as="button"
                class="
                  text-sm
                  bg-red-500
                  hover:bg-red-700
                  text-white
                  py-1
                  px-2
                  rounded
                  focus:outline-none focus:shadow-outline
                "
              >
                Edit
              </Link>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <Pagination class="mt-6 space-x-6" :links="users.links" />
</template>
<script>
import Layout from "@/Pages/Shared/Layout";
export default {
  layout: Layout,
};
</script>
