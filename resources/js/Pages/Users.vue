<template>
  <Head title="Users">
    <meta name="description" content="Users page" head-key="description" />
  </Head>

  <h1 class="text-2xl">Users</h1>

  <div style="margin-top: 900px">
    <p>The current time is {{ time }}.</p>
  </div>
</template>
<script>
import Layout from "@/Pages/Shared/Layout";
export default {
  layout: Layout,
  props: {
    time: String,
  },
};
</script>
