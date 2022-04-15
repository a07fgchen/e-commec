<script setup>
import { reactive } from "vue";
import { computed } from "vue";
import { watch } from "vue";

let carts = reactive(JSON.parse(localStorage.getItem("cart")) ?? []);

const subtotal = computed(() => {
  let sum = 0;
  carts.map((item) => {
    return (sum += item.price * item.quantity);
  });

  return sum;
});

function sum(price, quantity) {
  return price * quantity;
}

function deleteItem(id) {
  let index = carts.findIndex((element) => {
    return element.id === id;
  });
  carts.splice(index, 1);
}

watch(
  carts,
  (newCarts) => {
    localStorage.setItem("cart", JSON.stringify(newCarts));
  },
  {
    deep: true,
  }
);
</script>
<template>
  <div class="container mx-auto mt-20">
    <table class="w-full text-center">
      <thead class="bg-sky-500">
        <tr>
          <th>產品名稱</th>
          <th>數量</th>
          <th>總價</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in carts" :key="item.id">
          <td class="pt-2 px-1">
            <div class="flex">
              <img class="w-20 h-20" :src="item.image" />
              <div class="flex flex-col justify-center items-start space-x-1">
                <p>{{ item.name }}</p>
                <small>價格 {{ item.price }}</small>
                <button
                  class="text-red-500 cursor-pointer"
                  @click="deleteItem(item.id)"
                >
                  刪除
                </button>
              </div>
            </div>
          </td>
          <td>
            <input
              type="number"
              min="1"
              class="w-12 h-8 p-1 rounded-lg"
              v-model="item.quantity"
            />
          </td>
          <td>{{ sum(item.price, item.quantity) }}</td>
        </tr>
      </tbody>
      <tfoot class="border-t-2 border-stone-500">
        <tr>
          <td></td>
          <td>小計</td>
          <td>{{ subtotal }}</td>
        </tr>
        <tr>
          <td></td>
          <td>運費</td>
          <td>20</td>
        </tr>
        <tr>
          <td></td>
          <td>總計</td>
          <td>${{ subtotal + 20 }}</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><Link as="button">結帳</Link></td>
        </tr>
      </tfoot>
    </table>
  </div>
</template>

<script>
import Layout from "@/Layouts/Ecommence/Layout";

export default {
  layout: Layout,
};
</script>