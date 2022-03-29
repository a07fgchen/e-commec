<script setup>
import NavLink from "@/Components/Ecommence/NavLink";
</script>
<template>
  <nav>
    <ul class="flex list-disc list-inside space-x-4">
      <li>
        <NavLink :href="route('login')" :active="$page.component === 'Login'">
          Login
        </NavLink>
      </li>
      <li>
        <NavLink :href="route('register')" :active="$page.component === 'Register'">
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
</template>
