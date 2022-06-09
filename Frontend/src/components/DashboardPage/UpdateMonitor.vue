<template>
    <!-- <Hello msg="Students" /> -->
    <Add action="modifier" msg="Moniteur" />
    <form @submit.prevent>
        <div class="content">
            
            <div class="profil-img">
                <img id="blah" :src="'/assets/images/' + Monitor.photo" alt="">
                <input id="img" type="file"  @change="displayImg">

            </div>
            <div class="form">
                <input type="text" name="" id="" class="form-control" hidden v-model="Monitor.id_Monitor">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitor.nom_monitor">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitor.prenom_monitor">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="" id="" class="form-control" v-model="Monitor.email">
                </div>
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitor.cin">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="tel" name="" id="" class="form-control" v-model="Monitor.tel">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="adress" name="" id="" class="form-control" v-model="Monitor.adresse">
                </div>
                <div class="div-bot">
                    <div class="form-group">
                        <label for="">Date de naissance</label>
                        <input type="date" name="" id="" class="form-control" v-model="Monitor.datNaissance">
                    </div>
                    <div class="form-group">
                        <label for="">Genre</label>
                        <select name="" id="" class="form-control" v-model="Monitor.sexe">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>
                    
                   
                </div>

                <div />
            </div>


        </div>
        <div class="w-100">
            <input @click="updateMonitor()" class=" btn aaa btn-primary ms-auto" type="button" value="Modifier">
            <input  @click="retour()" class=" btn aaa btn-danger ms-auto" type="button" value="Cancel">

        </div>

    </form>

</template>

<script>
import Hello from './Hello.vue';
import Add from './add.vue';
import swal from "sweetalert";


export default {
    name: 'updateMonitor',
    components: {
        Hello,
        Add


    },
    data() {
        return {
             Monitor:{
               id_Monitor:"",
               nom_monitor:"",
               prenom_monitor:"",
               tel:"",
               email:"",
               cin:"",
               adresse:"",
               datNaissance:"",
               photo:"",
               sexe:"",
               id_utilisateur:""
           },
        }
    },

    methods: {
        showAlert() {
            swal({
                icon: 'success',
                title: 'Your Appointment has been created',
                confirmButtonText: 'Continue',
            }).then((result) => {
                if (result) {
                    this.showPopup = false
                    // window.location = "/Monitors"
                    this.$router.push('/Monitors')
                }
            })
        },
         retour(){
            this.$router.push('/detailmonitor/' + this.$route.params.id);
        },
         displayImg(ev) {
            const imgInp = ev.target;
            const [file] = imgInp.files;
            if (file) {
                this.Monitor.photo = file.name;
                var blah = document.getElementById("blah")
                blah.src = URL.createObjectURL(file)
            }
        },
        detail() {
            fetch(`http://localhost/Statique/Backend/Monitor/getMonitor?id=${this.$route.params.id}`).then(res => res.json()).then(Monitor => {
                this.Monitor = Monitor;
                
            })
        },
        updateMonitor() {
            fetch("http://localhost/Statique/Backend/Monitor/updateMonitor", {
                method: "POST",
                body: JSON.stringify(this.Monitor),
            }).then((result) => {
                this.$router.push("/Monitors");
            })

        },
    },

    mounted() {
        this.detail();
        
    

    },

    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;


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
