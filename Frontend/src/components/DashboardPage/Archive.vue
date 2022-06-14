<template>



    <Hello msg="Cars" link="/AddCar" />
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">

    <div class="content-card">
        <div class="card" v-for="(data, index) in datap " :key="index">
            <div class="profil">
                <img :src="data.img" alt="John" style="width:100%">
            </div>

            <h1>{{ data.marque }}</h1>
            <p class="title">matricule:{{ data.matricule }}</p>
            <p class="title">model:{{ data.model }}</p>


            <router-link :to="'/detailCar/' + data.id_voiture">
                <p><button>detaill</button></p>
            </router-link>
        </div>


    </div>
</template>

<script>
import Hello from './Hello.vue';



export default {
    name: 'Archieves',
    components: {
        Hello
    },
    data() {
        return {

            Voitureform: {
                id_voiture: "",
                marque: "",
                matricule: "",
                photo: "",
                id_utilisateur: "1"

            },

            datap: [
                { img: require(`@/assets/images/m3.png`), marque: "Audi 8", model: "2020", matricule: "AB-12-34" },
                { img: require(`@/assets/images/v1.png`), marque: "Audi 8", model: "2020", matricule: "AB-12-34", },
                { img: require(`@/assets/images/c2.png`), marque: "Audi 8", model: "2020", matricule: "AB-12-34", },
                { img: require(`@/assets/images/v2.png`), marque: "Audi 8", model: "2020", matricule: "AB-12-34", },
                { img: require(`@/assets/images/v3.png`), marque: "Audi 8", model: "2020", matricule: "AB-12-34", },
                { img: require(`@/assets/images/c2.png`), marque: "Audi 8", model: "2020", matricule: "AB-12-34", },






            ],

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

* {
    font-size: 120%;
}

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}

.content-card {
    display: flex;
    flex-wrap: wrap;
    margin-top: 10px;
}

.profil {
    width: 300px;
    height: 300px;

    img {

        width: 300px;
        height: 300px;
        position: center;
        object-fit: cover;


    }
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    margin-bottom: 20px;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
    padding: 10px;
}

button:hover {
    opacity: 0.7;
}

a:hover {
    color: $hover;
}

p {
    margin: 0;
}
</style>
