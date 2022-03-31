<script setup>
import NavLink from "@/Components/Ecommence/NavLink";
import { ref } from "vue";
import { computed } from "vue";

</script>
<template>
  <header class="p-4 flex flex-wrap justify-between items-center bg-gray-200">
    <Link :href="route('index')">
      <h1 class="text-2xl font-bold">Logo</h1>
    </Link>
    <button class="block md:hidden" @click="activeSideBar = !activeSideBar">
      Hamberger
    </button>
    <nav
      class="hidden w-full md:block md:w-auto"
    >
      <ul
        class="
          mt-4
          text-center
          md:flex md:justify-center md:items-center md:space-x-4 md:flex-row md:mt-0
        "
      >
        <li>
          <NavLink :href="route('index')" :active="$page.component === 'Index'">
            Home
          </NavLink>
        </li>
        <li>
          <NavLink :href="route('login')" :active="$page.component === 'Login'">
            Login
          </NavLink>
        </li>
        <li>
          <NavLink
            :href="route('register')"
            :active="$page.component === 'Register'"
          >
            Register
          </NavLink>
        </li>
        <li>
          <NavLink :href="route('cart')" :active="$page.component === 'cart'">
            Cart
          </NavLink>
        </li>
        <li>
          <NavLink
            :href="route('notification')"
            :active="$page.component === 'notification'"
          >
            Notification
          </NavLink>
        </li>
      </ul>
    </nav>
  </header>
</template>
