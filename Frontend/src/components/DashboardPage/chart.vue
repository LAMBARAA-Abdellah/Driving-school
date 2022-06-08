<template>
  <v-app>
   <v-container>
            <v-row>
              <v-col>
                <h1>{{ heading }}</h1>
                <v-btn color='black' class="white--text" @click='generatePDF'>Generate PDF</v-btn>
              </v-col>
            </v-row>
            <v-row>
              <v-col>
                <ul>
                  <li v-for='item in items'>{{ item.title }} - {{ item.body }}</li>
                </ul>
              </v-col>
            </v-row>
          </v-container>
        </v-app>
</template>

<script>
import  DoughnutChart  from './DoughnutChart'
import { Bar } from 'vue-chartjs'

import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
  name: 'BarChart',
  components: {
    
  },
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
      default: () => { }
    }
  },
  data() {
    return {
     
    }
  }
}
</script>