<template>

  <div class=" container">
    <h4>Ajouter seance</h4>
    <form class="form-inline">
      <div class="form-group">
        <label for="email">Type seance</label>
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
        <input  @click="AddSeance()"   type="submit" class="btn btn-primary" value="Ajouter">
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
                <td> <i @click="validateStudent(Student.id_Candidat)" class=" fas fa-plus-square"></i> <i
                    @click="validateStudent(Student.id_Candidat)" class="	fas fa-edit"></i> <i
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
      seances: [],
      seance: {
        date: '',
        debut: '',
        fin: '',
        seance: '',
      },


    }
  },
  methods: {
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
        return reponse.json();
      })).then((data) => {
        this.getSeances();
      });
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
.fa-archive{
  color: #000;
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