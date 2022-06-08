<template>
    <!-- <Hello msg="Students" /> -->
    <Add action="ajouter " msg="Personnel" />
    <form @submit.prevent>
        <div class="content">
            <div class="profil-img">
                <img id="blah" src="" alt="">

                <input id="img" type="file" name="" @change="displayImg">

            </div>
            <div class="form">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Personnelform.nom_utilisateur">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="" id="" class="form-control" v-model="Personnelform.prenom_utilisateur">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="" id="" class="form-control" v-model="Personnelform.email">
                </div>
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="" id="" class="form-control" v-model="Personnelform.cin">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="" id="" class="form-control" v-model="Personnelform.tel">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" name="" id="" class="form-control" v-model="Personnelform.adresse">
                </div>
                <div class="div-bot">
                    <div class="form-group">
                        <label for="">Date de naissance</label>
                        <input type="date" name="" id="" class="form-control" v-model="Personnelform.datNaissance">
                    </div>
                    <div class="form-group">
                        <label for="">Genre</label>
                        <select name="" id="" class="form-control" v-model="Personnelform.sexe">
                            <option value="">Homme</option>
                            <option value="">Femme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">profession</label>
                        <input type="text" name="" id="" class="form-control" v-model="Personnelform.profession">
                    </div>

                </div>

                <div />
            </div>


        </div>

        <div class="w-100">
            <input @click="AddPersonnel()" class=" btn aaa btn-primary ms-auto" type="button" value="Ajouter">
        </div>


    </form>

</template>

<script>
import Hello from './Hello.vue';
import Add from './add.vue';


export default {
    name: 'AddStudent',
    name: 'Monitor',
    components: {
        Hello,
        Add


    },
    data() {
        return {
            Personnelform: {
                nom_utilisateur: '',
                prenom_utilisateur: '',
                cin: "",
                tel: "",
                email: "",
                login: "",
                pass: "",
                photo: "",
                adresse: "",
                datNaissance: "",
                sexe: "",
                profession: "",
                id_admin: "1"
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
                    this.$router.push('/Personnels')
                }
            })
        },
        displayImg(ev) {
            const imgInp = ev.target;
            const [file] = imgInp.files;
            if (file) {
                this.Personnelform.photo = file.name;
                var blah = document.getElementById("blah")
                blah.src = URL.createObjectURL(file)
            }
        },
        AddPersonnel() {
            fetch("http://localhost/Statique/Backend/personnel/addPersonnel", {
                method: "POST",
                body: JSON.stringify({
                    nom_utilisateur: this.Personnelform.nom_utilisateur,
                    prenom_utilisateur: this.Personnelform.prenom_utilisateur,
                    cin: this.Personnelform.cin,
                    tel: this.Personnelform.tel,
                    email: this.Personnelform.email,
                    login: this.Personnelform.login,
                    pass: this.Personnelform.pass,
                    photo: this.Personnelform.photo,
                    adresse: this.Personnelform.adresse,
                    datNaissance: this.Personnelform.datNaissance,
                    sexe: this.Personnelform.sexe,
                    profession: this.Personnelform.profession,
                    id_admin: this.Personnelform.id_admin                   

                })
           }).then((reponse => {
                return reponse.json();
            })).then((data) => {
                if (data) {
                    console.log("hhhhhhh");
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
