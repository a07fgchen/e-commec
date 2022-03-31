<script setup>
import Layout from "@/Layouts/Ecommence/Layout.vue";
</script>
<template>Home</template>
<script>
    export default{
       layout:Layout,
       mounted(){
           console.log(this.route('index'))
       }
    }
</script>
