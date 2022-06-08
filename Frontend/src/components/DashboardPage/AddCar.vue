<template>
    <!-- <Hello msg="Students" /> -->
    <Add action="ajouter " msg="Car"/>
    <form action="">
    <div class="content">
    
        
             <div class="profil-img">
                <img id="blah" src="" alt="">

                <input id="img" type="file" name="" @change="displayImg">

            </div>
            <div class="form">
                <div class="form-group">
                    <label for="">Matricule</label>
                    <input type="text" name="" id="" class="form-control" v-model="carform.matricule">
                </div>
                <div class="form-group">
                    <label for="">Marque</label>
                    <input type="text" name="" id="" class="form-control" v-model="carform.marque">
                </div>
                <div class="form-group">
                    <label for="">Model</label>
                    <!-- <input type="years" name="" id="" class="form-control"> -->
                    <input type="number" min="1900" max="2099" step="1"  v-model="carform.module"/>
                </div>
               
                
            </div>
               
    <div />
 </div>
 

    <div class="w-100">
     <input @click="AddCar()" class=" btn aaa btn-secondary ms-auto" type="button" value="Ajouter">
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
            carform: {
                matricule: '',
                marque: '',
                module: '',
                photo: '',
                id_utilisateur: '1'
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
                   // window.location = "/Students"
                   this.$router.push('/cars')
                }
            })
        },

        displayImg(ev) {
            const imgInp = ev.target;
            const [file] = imgInp.files;
            if (file) {
                this.carform.photo = file.name;
                var blah = document.getElementById("blah")
                blah.src = URL.createObjectURL(file)
            }
        },
        AddCar() {
            fetch("http://localhost/Statique/Backend/voiture/addVoiture", {
                method: "POST",
                body: JSON.stringify({
                    matricule: this.carform.matricule,
                    marque: this.carform.marque,
                    module: this.carform.module,
                    photo: this.carform.photo,
                    id_utilisateur: this.carform.id_utilisateur,
                    
                })
            }).then((reponse => {
                return reponse.json();
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
}
.aaa{
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
        margin-top: 100px;

        img {
            background-image: url("@/assets/images/carb.png");
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
