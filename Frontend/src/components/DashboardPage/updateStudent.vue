<template>
    <!-- <Hello msg="Students" /> -->
    <Add action="modifier" msg="Student" />
    <form @submit.prevent>
        <div class="content">

            <div class="profil-img">
                <img id="blah" :src="'/assets/images/' + Student.photo" alt="">

                <input id="img" type="file" name="" @change="displayImg">

            </div>
            <div class="form">
                <input type="text" name="" id="" class="form-control" hidden v-model="Student.id_Candidat">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Student.nom_candidat">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Student.prenom_candidat">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="" id="" class="form-control" v-model="Student.email">
                </div>
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="" id="" class="form-control" v-model="Student.cin">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="tel" name="" id="" class="form-control" v-model="Student.tel">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="adress" name="" id="" class="form-control" v-model="Student.adresse">
                </div>
                <div class="div-bot">
                    <div class="form-group">
                        <label for="">Date de naissance</label>
                        <input type="date" name="" id="" class="form-control" v-model="Student.datNaissance">
                    </div>
                    <div class="form-group">
                        <label for="">Genre</label>
                        <select name="" id="" class="form-control" v-model="Student.sexe">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Select </label>
                        <select name="" id="" class="form-control" v-model="Student.permis">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>

                        <div />
                        <div />
                        <div />
                        <div />

                    </div>
                    <div class="form-group">
                        <label for="">Total a payé</label>
                        <input type="number" name="" id="" class="form-control" v-model="Student.Total">
                    </div>
                    <div class="form-group">
                        <label for="">Tranche payé</label>
                        <input type="text" default="0" name="" id="" class="form-control" v-model="Student.avance">
                    </div>
                </div>

                <div />
            </div>


        </div>
        <div class="w-100">
            <input @click="updateStudent()" class=" btn aaa btn-primary ms-auto" type="button" value="Modifier">
            <input @click="retour()" class=" btn aaa btn-danger ms-auto" type="button" value="Cancel">
        </div>

    </form>

</template>

<script>
import Hello from './Hello.vue';
import Add from './add.vue';
import swal from "sweetalert";


export default {
    name: 'updateStudent',
    name: 'Student',
    components: {
        Hello,
        Add


    },
    data() {
        return {
        }
    },

    methods: {
        retour() {
            this.$router.push('/detailStudent/' + this.$route.params.id);

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
                    this.$router.push('/Students')
                }
            })
        },

        displayImg(ev) {
            const imgInp = ev.target;
            const [file] = imgInp.files;
            if (file) {
                this.Student.photo = file.name;
                var blah = document.getElementById("blah")
                blah.src = URL.createObjectURL(file)
            }
        },

        detail() {
            this.$store.dispatch('fetchStudent', this.$route.params.id) 

        },
        updateStudent() {
            fetch("http://localhost/Statique/Backend/student/updateStudent", {
                method: "POST",
                body: JSON.stringify(this.Student),
            }).then((result) => {
                this.$router.push("/Students");
            })

        },
    },

    mounted() {
        fetch(`http://localhost/Statique/Backend/student/getStudent?id=${this.$route.params.id}`)
            .then(res => res.json()).then(Student => {
                this.Student = Student;
            })

    },
    computed: {
        Student() {
            return this.$store.state.student 
        }
    },

    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover: #F8CE03;


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
    padding: 40px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    height: auto;


    .profil-img {
        width: 200px;
        height: 200px;
        margin-top: 100px;

        img {
            background-image: url("@/assets/images/profil2.png");
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
        margin-top: 60px;
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
</style>
