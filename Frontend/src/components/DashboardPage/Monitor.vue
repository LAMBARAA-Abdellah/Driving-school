<template>



    <Hello msg="Monitor" link="/AddMonitor" />
   

    <div class="content-card">
        <div class="card" v-for="(data, index) in Monitor " :key="index">
            <div class="profil-img">
                <img :src="'assets/images/' + data.photo" alt="John" style="width:100%">
            </div>
            <h1>{{data.prenom_monitor}} {{data.nom_monitor}}</h1>
            <p class="title">Cin:{{data.cin}}</p>
            <p class="title">Tel:{{data.tel}}</p>
            <router-link :to="'/detailmonitor/' + data.id_Monitor">
                <p><button>detaill</button></p>
            </router-link>
        </div>


    </div>
</template>

<script>
import Hello from './Hello.vue';



export default {
    name: 'Monitor',
    components: {
        Hello
    },
    data(){
        return{
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
    methods(){

    },
     mounted() {
        // this.id = localStorage.getItem("id");
        // console.log(localStorage.getItem("id"));
        fetch("http://localhost/Statique/Backend/monitor/allMonitors").then(res => res.json()).then(Monitor => {
            this.Monitor = Monitor;
        })
    },
    

    
    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;

*{
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
    margin-top: 70px;
}

.profil-img {
    width: 300px;
    height: 300px;

    img {
        display: block;
        width: 100%;
        height: 100%;
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
