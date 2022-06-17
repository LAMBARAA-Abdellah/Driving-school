<template>

    <div class=" container">
        <h4> Infos sur la Seance</h4>
        <form class="form-inline" @submit.prevent>
            <div class="form-group">
                <label for="seance">Type seance</label>
                <!-- <select name="" id="" class="form-control" v-model="seance.seance" disabled>
                    <option value="conduite"> conduite</option>
                    <option value="code"> code</option>

                </select> -->
                <input type="text" class="form-control" id="email" placeholder="Enter email" v-model="seance.seance" disabled>
            </div>
            <div class="form-group">
                <label for="email">Date seance</label>
                <input type="date" class="form-control" id="email" placeholder="Enter email" v-model="seance.date"
                    disabled>
            </div>
            <div class="form-group">
                <label for="debut">Heure debut</label>
                <input type="time" class="form-control" id="debut" placeholder="Enter password" v-model="seance.debut"
                    disabled>
            </div>
            <div class="form-group">
                <label class="tt" for="fin">Heure fin</label>
                <input type="time" class="form-control" id="fin" placeholder="Enter password" v-model="seance.fin"
                    disabled>
            </div>
            <!-- <div class="form-group">
                <input v-if="state" @click="AddSeance()" type="button" class="btn btn-primary" value="Ajouter">
                <input v-if="!state" @click="updateSeance(), state = !state" type="button" class="btn btn-warning"
                    value="Modifier">

            </div> -->
        </form>

        <div class="list">
            <h4>Listes des Etudiant</h4>
            <div class="overflow-x-auto">
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>photo</th>
                                <th>CIN</th>
                                <th>Nom complet</th>
                                <th>Telephone</th>
                                <th>Effectuer Abssence</th>
                                <!-- <th>Abssence effectuer </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr v-for="(Student, i) in Students">

                                <th v-if="Student.archive == 0">
                                    <img :src="'../assets/images/' + Student.photo" alt="dd">

                                </th>
                                <td v-if="Student.archive == 0">{{ Student.cin }}</td>
                                <td v-if="Student.archive == 0">{{ Student.nom_candidat }} {{ Student.prenom_candidat }}
                                </td>
                                <td v-if="Student.archive == 0">{{ Student.tel }}</td>
                                <!-- <td>{{ Student.seance }}</td> -->
                                <td v-if="Student.archive == 0">
                                    <i @click="deleteAbsence(Student.id_Candidat)" class=" fas fa-minus-square"></i>
                                    <i @click="addAbsence(Student.id_Candidat, seance.id)"
                                        class=" fas fa-plus-square"></i>

                                </td>
                                <!-- <td v-if="Student.archive == 0">oui</td> -->
                            </tr>

                            <!-- row 2 -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="list">
            <h4>Listes des Absence</h4>
            <div class="overflow-x-auto">
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>photo</th>
                                <th>CIN</th>
                                <th>Nom complet</th>
                                <th>Telephone</th>
                                <!-- <th>Effectuer Abssence</th>
                                <th>Abssence effectuer </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr v-for="Absence in Absences">

                                <th>
                                    <img :src="'../assets/images/' + Absence.photo" alt="dd">

                                </th>
                                <td>{{ Absence.cin }}</td>
                                <td>{{ Absence.nom_candidat }} {{ Absence.prenom_candidat }}
                                </td>
                                <td>{{ Absence.tel }}</td>
                                <!-- <td>{{ Student.seance }}</td> -->
                                <!-- <td>
                                        <i @click="$router.push('/seance/' + seance.id)" class=" fas fa-minus-square"></i>
                                        <i @click="addAbsence(Student.id_Candidat, seance.id)"
                                            class=" fas fa-plus-square"></i>

                                    </td>
                                    <td>oui</td> -->
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
            },
            Students: [],
            Absences: [],



        }
    },
    methods: {
        getstudents() {
            fetch("http://localhost/Statique/Backend/student/allStudents").then(res => res.json()).then(Students => {
                this.Students = Students;
            })
        },
        getsAbsence() {
            fetch(`http://localhost/Statique/Backend/student/StudentAbsence?id=${this.$route.params.id}`).then(res => res.json()).then(Absences => {
                this.Absences = Absences;

            })
        },

        detail() {
            fetch(`http://localhost/Statique/Backend/seance/detail?id=${this.$route.params.id}`).then(res => res.json()).then(seance => {
                this.seance = seance;

            })
        },
        addAbsence(id_student, id_seance) {

            fetch(`http://localhost/Statique/Backend/seance/addAbsence?id_student=${id_student} && id_seance=${id_seance}`)
                .then(res => res.json())
            this.getsAbsence();

        },
        deleteAbsence(id) {
            fetch(`http://localhost/Statique/Backend/student/deleteAbsence?id=${id}`,
                {
                    method: "GET"
                })
                .then(() => {
                    this.getsAbsence();

                })

        },
        deletePersonnel(id) {
            fetch(`http://localhost/Statique/Backend/Personnel/deletePersonnel?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.$router.push('/Personnels');
            })
        },
    },
    mounted() {
        this.detail();
        this.getstudents();
        this.getsAbsence();
    },




}


</script>
<style lang="scss" scoped>
$color-sousnavbar: #383838;
$hover: #F8CE03;

th img {
    width: 40px;
    height: 40px;
    border-radius: 20%;
}

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

.fa-plus-square {
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