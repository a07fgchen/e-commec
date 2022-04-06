<template>
  <div class="container mx-auto mt-20">
    <table class="w-full text-center">
      <thead class="bg-sky-500">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="pt-2 px-1">
            <div class="flex">
              <img class="w-20 h-20" src="images/buy-1.jpg" />
              <div>
                <p>Red Printen Tshirt</p>
                <small>Price 50.00</small>
                <a class="text-red-500">remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" class="w-12 h-8 p-1 rounded-lg" value="1" />
          </td>
          <td>50.00</td>
        </tr>
        <tr>
          <td class="pt-2 px-1">
            <div class="flex">
              <img class="w-20 h-20" src="images/buy-2.jpg" />
              <div>
                <p>Red Printen Tshirt</p>
                <small>Price 50.00</small>
                <a class="text-red-500">remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" class="w-12 h-8 p-1 rounded-lg" value="1" />
          </td>
          <td>50.00</td>
        </tr>
        <tr>
          <td class="pt-2 px-1">
            <div class="flex">
              <img class="w-20 h-20" src="images/buy-3.jpg" />
              <div>
                <p>Red Printen Tshirt</p>
                <small>Price 50.00</small>
                <a class="text-red-500">remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" class="w-12 h-8 p-1 rounded-lg" value="1" />
          </td>
          <td>50.00</td>
        </tr>
      </tbody>
      <tfoot class="border-t-2 border-stone-500">
        <tr>
          <td></td>
          <td>小計</td>
          <td>$200</td>
        </tr>
        <tr>
          <td></td>
          <td>運費</td>
          <td>20</td>
        </tr>
        <tr>
          <td></td>
          <td>總計</td>
          <td>220</td>
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