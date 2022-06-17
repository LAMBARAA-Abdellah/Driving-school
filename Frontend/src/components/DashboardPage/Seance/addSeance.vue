<template>

  <div class=" container">
    <h4 v-if="state">Ajouter seance</h4>
    <h4 v-if="!state">Modifier seance</h4>
    <form class="form-inline" @submit.prevent>
      <div class="form-group">
        <label for="seance">Type seance</label>
        <select name="" id="" class="form-control" v-model="seance.seance">
          <option value="conduite"> conduite</option>
          <option value="code"> code</option>

        </select>
      </div>
      <div class="form-group">
        <label for="email">Date seance</label>
        <input type="date" class="form-control" id="email" placeholder="Enter email" v-model="seance.date">
      </div>
      <div class="form-group">
        <label for="debut">Heure debut</label>
        <input type="time" class="form-control" id="debut" placeholder="Enter password" v-model="seance.debut">
      </div>
      <div class="form-group">
        <label class="tt" for="fin">Heure fin</label>
        <input type="time" class="form-control" id="fin" placeholder="Enter password" v-model="seance.fin">
      </div>
      <div class="form-group">
        <input v-if="state" @click="AddSeance()" type="button" class="btn btn-primary" value="Ajouter">
        <input v-if="!state" @click="updateSeance(), state = !state" type="button" class="btn btn-warning"
          value="Modifier">

      </div>
    </form>

    <div class="list">
      <h4>Listes des séances</h4>
      <div class="overflow-x-auto">
        <div class="overflow-x-auto">
          <table class="table w-full">
            <!-- head -->
            <thead>
              <tr>
                <th></th>
                <th>Date seance</th>
                <th>Heure debut</th>
                <th>Heure fin</th>
                <th>Type seance</th>
                <th> Timer</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->

              <tr v-for="(seance, i) in seances">

                <th>{{ i + 1 }}</th>
                <td>{{ seance.date }}</td>
                <td>{{ seance.debut }}</td>
                <td>{{ seance.fin }}</td>
                <td>{{ seance.seance }}</td>
                <td>{{play(seance.date) }}</td>
                <td> <i @click="$router.push('/seance/' + seance.id)" class="	fas fa-question-circle"></i> <i
                    @click="detail(seance.id), state = !state" class="	fas fa-edit"></i> <i
                    @click="deleteSeance(seance.id)" class="fas fa-archive"></i></td>
              </tr>

              <!-- row 2 -->

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>





</template>
<script>


export default {
  name: 'Hello',
  props: {

  },
  data() {
    return {
      state: true,
      seances: [],
      seance: {
        date: '',
        debut: '',
        fin: '',
        seance: '',
        timerEnabled: true,
        timerCount: 30
      },


    }
  },
  methods: {
    setTimeout(time) {
      setTimeout(() => {
        return Date.now() - time
      }, 1000);
    },

    getSeances() {
      fetch("http://localhost/Statique/Backend/seance/getSeances").then(res => res.json()).then(seances => {

        this.seances = seances;

      })
    },
    deleteSeance(id) {
      fetch(`http://localhost/Statique/Backend/seance/deleteSeance?id=${id}`,
        {
          method: "GET"
        }
      ).then(() => {
        this.getSeances();
      })
    },
    detail(id) {
      fetch(`http://localhost/Statique/Backend/seance/detail?id=${id}`).then(res => res.json()).then(seance => {
        this.seance = seance;

      })
    },


    AddSeance() {
      fetch("http://localhost/Statique/Backend/seance/addSeance", {
        method: "POST",
        body: JSON.stringify({
          date: this.seance.date,
          debut: this.seance.debut,
          fin: this.seance.fin,
          seance: this.seance.seance,
        })
      }).then((reponse => {
        this.getSeances();
        this.seance.date = '';
        this.seance.debut = '';
        this.seance.fin = '';
        this.seance.seance = '';
        return reponse.json();
      }));
    },
    updateSeance() {
      fetch("http://localhost/Statique/Backend/seance/updateSeance", {
        method: "POST",
        body: JSON.stringify(this.seance),
      }).then((result) => {
        this.getSeances();
        this.seance.date = '';
        this.seance.debut = '';
        this.seance.fin = '';
        this.seance.seance = '';
        return result.json();

      })

    },

    play(date) {
      // this.timerEnabled = true;
      var sep = new Date(date);
        var today = new Date();
        var diffD = Math.floor((sep - today) / (1000 * 60 * 60 * 24));
        return diffD;
    },

    pause() {
      this.timerEnabled = false;
    }


  },
  watch: {

    timerEnabled(value) {
      if (value) {
        setTimeout(() => {
          this.timerCount--;
        }, 1000);
      }
    },

    timerCount: {
      handler(value) {

        if (value > 0 && this.timerEnabled) {
          setTimeout(() => {
            this.timerCount--;
          }, 1000);
        }

      },
      immediate: true // This ensures the watcher is triggered upon creation
    }

  },
  mounted() {
    this.getSeances();
  },




}


</script>
<style lang="scss" scoped>
$color-sousnavbar: #383838;
$hover: #F8CE03;

.fas {
  margin: 0 10px;
  font-size: 20px;
  cursor: pointer;
}

.fa-archive {
  color: red;
}

.fa-edit {
  color: #F8CE03;
}

.fa-question-circle {
  color: green;
}

.container {
  margin-top: 20px;

  h4 {
    font-weight: bold;
    margin: 40px;
  }
}

.form-group {
  display: flex;
  flex-direction: column;
  align-items: flex-start;

  label {
    font-weight: bold;
  }
}

.btn {
  margin-top: 20px;
}

.form-inline {
  justify-content: space-evenly;

}

@media screen and (max-width: 576px) {}
</style>