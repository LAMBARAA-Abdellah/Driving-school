<template>
    <!-- <Hello msg="Students" /> -->
    <Add action="ajouter " msg="Tranche" />
    <form action="">
        <div class="content">
            <div class="profil-img">
                <img :src="'/assets/images/' + Student.photo" alt="lmodir">
            </div>
            <H2> {{ Student.prenom_candidat }} {{ Student.nom_candidat }}</H2>

            <div class="argent">
                <div>
                    <h4>Totale a payé</h4>
                    <span class="total">{{ Student.Total }} DH</span>
                </div>
                <div>
                    <h4>Avance</h4>
                    <span class="avance">{{ Tranche.avance  || 0}} DH</span>
                </div>
                <div>
                    <h4>reste a payé </h4>
                    <span class="reste">{{ this.reste }} DH</span>
                </div>





            </div>
            <div class="form">

                <div class="form-group">
                    <input type="text" name="" id="" class="form-control" hidden v-model="Student.id_Candidat">
                    <label for="">Tranche payé</label>
                    <div class="arg">
                        <input step="1" type="number" :max="this.reste" default="0" name="" id="" class="form-control"
                            v-model="TrancheForm.tranche"> &nbsp; &nbsp;DH
                    </div>

                </div>


            </div>

            <div />
        </div>


        <div class="w-100">
            <input @click="AddTranche()" class=" btn aaa btn-primary ms-auto" type="button" value="Ajouter">
            <input @click="retour()" class=" btn aaa btn-danger ms-auto" type="button" value="Cancel">
        </div>

    </form>

</template>
<script>
import Hello from './Hello.vue';
import Add from './add.vue';
import swal from "sweetalert";


export default {
    name: 'AddStudent',
    name: 'Monitor',
    components: {
        Hello,
        Add


    },
    data() {
        return {
            reste: 0,
            TrancheForm: {
                id_Candidat: '',
                tranche: '',
            },
            Tranche: {
                avance: '',

            }


        }
    },
    methods: {
        retour() {
            this.$router.push('/detailStudent/' + this.Student.id_Candidat);
        },
        showAlert() {
            swal({
                icon: 'success',
                title: 'Your Appointment has been created',
                confirmButtonText: 'Continue',
            }).then((result) => {
                if (result) {
                    this.showPopup = false
                    // window.location = "/Students"
                    this.$router.push('/detailStudent/' + this.$route.params.id);
                }
            })
        },
        Calculer() {
            this.reste = this.Student.Total - this.Tranche.avance;
                  },
        AddTranche() {
            fetch("http://localhost/Statique/Backend/student/addTranche", {
                method: "POST",
                body: JSON.stringify({
                    id_Candidat: this.Student.id_Candidat,
                    tranche: this.TrancheForm.tranche,
                })
            }).then((reponse => {
                reponse.json();
                this.showAlert();
            })).then((data) => {
                if (data) {
                    this.$router.push('/detailStudent/' + this.$route.params.id)
                }

            });
        },
        GetTranche() {
            fetch(`http://localhost/Statique/Backend/student/getTranche?id=${this.$route.params.id}`).then(res => res.json()).then(avance => {
                this.Tranche = avance;

            })
        },


    },
    computed: {
        Student() {
            return this.$store.state.student
        },



    },

    mounted() {
        this.$store.dispatch('fetchStudent', this.$route.params.id),
            this.Calculer(),
            this.GetTranche()
    },

    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover: #F8CE03;

.arg {
    display: flex;

    align-items: center;
}

.argent {
    width: 80%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

span {
    font-weight: bold;
    font-size: 2em;
}

.total {
    color: blue;

}

.avance {
    color: green;
}

.reste {
    color: red;
}

input {
    width: 300px;

}

select {
    width: 300px;
}

.btn {
    width: 140px;
}

form {
    background-color: #F9F8F8;
}

.aaa {
    margin: 20px;
}

.content {
    display: flex;
    flex-wrap: wrap;
    height: auto;
    flex-direction: column;
    align-items: center;

    .profil-img {
        width: 200px;
        height: 200px;
        margin-top: 50px;

        img {
            border-radius: 50%;
            object-fit: cover;
            display: block;
            background-position: center;
            background-size: cover;
            height: 200px;
            width: 100%;
        }

        input {
            margin-top: 20px;


            cursor: pointer;
        }
    }

    .form {
        width: 100%;
        margin-top: 10px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;

        .div-bot {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;


        }
    }
}

@media screen and (max-width: 776px) {
    .argent {
        flex-direction: column;
    }
}
</style>
