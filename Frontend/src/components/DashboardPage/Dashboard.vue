<template>
	<div class="container-fluid">
  <section>
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h5 class="text-uppercase">Minimal Statistics Cards</h5>
        <p>Statistics on minimal cards.</p>
      </div>
    
   
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fa fa-automobile text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>16</h3>
                <p class="mb-0">Cars</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-info">12</h3>
                <p class="mb-0">Monitors</p>
              </div>
              <div class="align-self-center">
                <i class="far fa-life-ring text-info fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    
     
    
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-warning">156</h3>
                <p class="mb-0">New Clients</p>
              </div>
              <div class="align-self-center">
                <i class="far fa-user text-success fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
  
   
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-chart-line text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>64.89 %</h3>
                <p class="mb-0">Bounce Rate</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
</div>
  </section>
</div>

<div class="statistique">

  <Bar
    :chart-options="chartOptions"
    :chart-data="chartData"
    :chart-id="chartId"
    :dataset-id-key="datasetIdKey"
    :plugins="plugins"
    :css-classes="cssClasses"
    :styles="styles"
    :width="width"
    :height="height"
  />
  </div>
</template>

<script>
import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
export default {
    name: 'Dashboard',
 components: { Bar },
  props: {
    chartId: {
      type: String,
      default: 'bar-chart'
    },
    datasetIdKey: {
      type: String,
      default: 'label'
    },
    width: {
      type: Number,
      default: 400
    },
    height: {
      type: Number,
      default: 400
    },
    cssClasses: {
      default: '',
      type: String
    },
    styles: {
      type: Object,
      default: () => {
        return {
          
        }
      }
    },
    plugins: {
      type: Object,
      default: () => {}
    }
  },
  data() {
    return {
      chartData: {
        labels: [ 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ],
        datasets: [ { data: [40, 20, 12,24, 20, 12,30, 20, 12,20, 20, 12,] ,
        backgroundColor:["#F8CE03"],
        label:"Chaifre d'affaire"
        
        
        
        
        } ]
      },
      chartOptions: {
        responsive: true
      }
    }
  }
}

</script>

<style lang="scss" scoped>
.statistique{ 
  width: 50%;
  height: 400px;
}
</style>