<template>
    <!-- <Hello msg="Students" /> -->
     <Add msg="Monitor"/>
    <form @submit.prevent>
    <div class="content">
           <div class="profil-img">
                <img id="blah" src="" alt="">

                <input id="img" type="file" name="" @change="displayImg">

            </div>
            <div class="form">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitorform.nom_monitor">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitorform.prenom_monitor">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitorform.email">
                </div>
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitorform.cin">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitorform.tel">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" name="" id="" class="form-control" v-model="Monitorform.adresse">
                </div>
                <div class="div-bot">
                     <div class="form-group">
                    <label for="">Date de naissance</label>
                    <input type="date" name="" id="" class="form-control" v-model="Monitorform.datNaissance">
                </div>
                <div class="form-group">
                    <label for="">Genre</label>
                    <select name="" id="" class="form-control" v-model="Monitorform.sexe">
                        <option value="">Homme</option>
                        <option value="">Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Select permis</label>
                    <select name="" id="" class="form-control">
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                        <option value="">D</option>
                        <option value="">E</option>
                        <option value="">F</option>
                    </select>

                    <div />
                    <div />
                    <div />
                    <div />




                </div>
                </div>
               
        <div />
 </div>
 

    </div>
    <div class="w-100">
     <input @click="AddMonitor()" class=" btn aaa btn-secondary ms-auto" type="button" value="Ajouter">
    </div>
       
   </form>

</template>

<script>
import Add from './add.vue';
import swal from "sweetalert";


export default {
    name: 'AddMonitor',
    name: 'Monitor',
    components: {
        Add


    },
     data() {
        return {
            Monitorform: {
               nom_monitor:"",
               prenom_monitor:"",
               tel:"",
               email:"",
               cin:"",
               adresse:"",
               datNaissance:"",
               photo:"",
               sexe:"",
               id_utilisateur: "1"
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
                   this.$router.push('/Monitors')
                }
            })
        },
   displayImg(ev) {
            const imgInp = ev.target;
            const [file] = imgInp.files;
            if (file) {
                this.Monitorform.photo = file.name;
                var blah = document.getElementById("blah")
                blah.src = URL.createObjectURL(file)
            }
        },

        AddMonitor() {
            fetch("http://localhost/Statique/Backend/monitor/addMonitor", {
                method: "POST",
                body: JSON.stringify({
                    nom_monitor: this.Monitorform.nom_monitor,
                    prenom_monitor: this.Monitorform.prenom_monitor,
                    cin: this.Monitorform.cin,
                    tel: this.Monitorform.tel,
                    email: this.Monitorform.email,
                    photo: this.Monitorform.photo,
                    adresse: this.Monitorform.adresse,
                    datNaissance: this.Monitorform.datNaissance,
                    sexe: this.Monitorform.sexe,
                    id_utilisateur: this.Monitorform.id_utilisateur
                })
            }).then((reponse => {
                 reponse.json();
                this.showAlert();
            })).then((data) => {
                if (data) {
                    this.showAlert();
                }

            });
        }
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
select{
    width: 300px;
}
.btn{
    width: 140px;
}
form{
    background-color: #F9F8F8;
    padding-top: 100px;
}
.aaa{
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

        .div-bot{
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
