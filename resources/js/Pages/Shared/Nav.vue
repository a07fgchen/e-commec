<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import NavLink from "@/Pages/Shared/NavLink";
</script>

<template>
  <nav>
    <ul class="flex space-x-6">
      <li>
        <NavLink :href="route('home')" :active="$page.component === 'Home'">
          Home
        </NavLink>
      </li>
      <li>
        <NavLink :href="route('setting')" :active="$page.component === 'Setting'">
          Setting
        </NavLink>
      </li>
      <li>
        <NavLink :href="route('users')" :active="$page.component === 'Users'">
          Users
        </NavLink>
      </li>
    </ul>
  </nav>
</template>
