<template>
  <v-app>
   <v-container>
            <v-row>
              <v-col>
                <h1>{{ heading }}</h1>
                <button color='black' class="white--text" @click='generatePDF'>Generate PDF</button>
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
   vuetify: new Vuetify(),
   data() {
    return {
      heading: "Sample PDF Generator",
      moreText: [
        "This is another few sentences of text to look at it.",
        "Just testing the paragraphs to see how they format.",
        "jsPDF likes arrays for sentences.",
        "Do paragraphs wrap properly?",
        "Yes, they do!",
        "What does it look like?",
        "Not bad at all."
      ],
      items: [
        { title: "Item 1", body: "I am item 1 body text" },
        { title: "Item 2", body: "I am item 2 body text" },
        { title: "Item 3", body: "I am item 3 body text" },
        { title: "Item 4", body: "I am item 4 body text" }
      ]
    };
  },
  methods: {
    generatePDF() {
      const columns = [
        { title: "Title", dataKey: "title" },
        { title: "Body", dataKey: "body" }
      ];
      const doc = new jsPDF({
        orientation: "portrait",
        unit: "in",
        format: "letter"
      });
      // text is placed using x, y coordinates
      doc.setFontSize(16).text(this.heading, 0.5, 1.0);
      // create a line under heading
      doc.setLineWidth(0.01).line(0.5, 1.1, 8.0, 1.1);
      // Using autoTable plugin
      doc.autoTable({
        columns,
        body: this.items,
        margin: { left: 0.5, top: 1.25 }
      });
      // Using array of sentences
      doc
        .setFont("helvetica")
        .setFontSize(12)
        .text(this.moreText, 0.5, 3.5, { align: "left", maxWidth: "7.5" });
      
      // Creating footer and saving file
      doc
        .setFont("times")
        .setFontSize(11)
        .setFontStyle("italic")
        .setTextColor(0, 0, 255)
        .text(
          "This is a simple footer located .5 inches from page bottom",
          0.5,
          doc.internal.pageSize.height - 0.5
        )
        .save(`${this.heading}.pdf`);
    }
  }

}
</script>