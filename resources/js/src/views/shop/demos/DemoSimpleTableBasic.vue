<template>
  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-uppercase">
            Shop Name
          </th>
          <th class="text-center text-uppercase">
            URL
          </th>
          <th class="text-center text-uppercase">
            Total Items
          </th>
          <th class="text-center text-uppercase">
            Total Sales
          </th>
          <th class="text-center text-uppercase">
          </th>
        </tr>
      </thead>
      <tbody v-if="data"> 
        <tr
          v-for="item in data"
          :key="item.data"
        >
          <td>{{ item.store_name }}</td>
          <td class="text-center">
            {{ item.url }}
          </td>
          <td class="text-center">
            {{ item.total_items }}
          </td>
          <td class="text-center">
            {{ item.total_sales }}
          </td>
          <td class="text-center">
            <button class = "button">View Report</button>
          </td>
        </tr>
      </tbody>
      <div v-else>
        Loading...
      </div>
    </template>
  </v-simple-table>
</template>

<script>
export default {
  data (){
    return {
      data: null
    }
  },
  beforeCreate(){
    const result = window.axios.get('/api/shopperformance')
                  .then(response => {
                    this.data = response.data
                  });
  }
  // async setup() {
  //   const result = await window.axios.get('/api/shopperformance');
  //   data = result.data;
  //   console.log(data);
  //   return {data}
  // },
}
</script>
