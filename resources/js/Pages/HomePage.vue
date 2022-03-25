<script setup>
import { Head,Link } from "@inertiajs/inertia-vue3";
import Button from "@/Components/Button.vue";
import NavLink from "@/Components/NavLinkDefault.vue";
import Category from '@/Components/Category.vue';
</script>
<template>
  <Head title="HomePage" />

  <div class="relative">
    <nav class="w-full bg-slate-700 px-3 py-2 shadow-2xl fixed top-0">
      <div class="container mx-auto flex flex-row items-center text-slate-100">
        <div class="basis-1/4 px-3">
          <!-- <img src="/images/logo.png" alt=""> -->
          <Link class="text-5xl" type="button">Logo</Link>
        </div>
        <div class="basis-1/2 px-3">
          <form>
             <NavLink :href="route('search')" method="get" as="button" type="button">
              搜尋
            </NavLink>
            <label for="keyword">
              <input
                type="search"
                value="search"
                class="rounded-md text-slate-700 focus:border-sky-500"
                required
              />
            </label>
          </form>
        </div>
        <div class="basis-1/4 px-3 inline-flex justify-between">
          <template v-if="$page.props.auth.user">
            <NavLink :href="route('logout')" method="post" as="button" type="button">
              登出
            </NavLink>
            <NavLink :href="route('notification')" as="button" type="button"
              >通知</NavLink
            >
          </template>

          <template v-else>
            <NavLink :href="route('login')" as="button"> 登入 </NavLink>

            <NavLink :href="route('register')"> 註冊 </NavLink>
          </template>

          <NavLink :href="route('cart')">購物車</NavLink>
        </div>
      </div>
    </nav>
    <div class="max-w-7xl mt-10">
      <div class="flex flex-row flex-wap py-10">
        <Category :categories="$page.props.categories" />
        <main role="main" class="w-full sm:w-2/3 md:w-3/4">
          <div v-for="product in $page.props.products" class="flex flex-row flex-wap">
            <a
              :href="route('product')"
              class="group block max-w-1/3 ring-1 ring-slate-900/5 rounded-lg p-3 mx-3 shadow-lg space-y-3 hover:ring-sky-500 hover:ring"
            >
              <div class="flex items-center space-x-3">
                <span> {{ product.name }} </span>
              </div>
              <p class="text-slate-500 text-sm"> {{ product.description }} </p>
            </a>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>
