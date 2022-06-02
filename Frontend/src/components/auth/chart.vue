<template>

   <div id="app">
    world
    <pie-chart :data="chartData" :options="chartOptions"></pie-chart>

  </div>
</template>
<script>
import { Doughnut, mixins } from "vue-chartjs";
export default {
  name: "App",
  components: {
    PieChart,
  },
  extends: Doughnut,
  props: ["data", "options"],
  mounted() {
    // this.chartData is created in the mixin.
    // If you want to pass options please create a local options object
    this.renderChart(this.data, {
      borderWidth: "10px",
      hoverBackgroundColor: "red",
      hoverBorderWidth: "10px"
    });
  },
  data() {
    return {
      chartOptions: {
        hoverBorderWidth: 10,
      },
      chartData: {
        hoverBackgroundColor: "red",
        hoverBorderWidth: 6,
        labels: ["Green", "Red", "Blue"],
        datasets: [
          {
            label: "Data One",
            backgroundColor: ["#41B883", "#E46651", "#00D8FF"],
            data: [1, 10, 5],
          },
        ],
      },
    };
  },
};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
