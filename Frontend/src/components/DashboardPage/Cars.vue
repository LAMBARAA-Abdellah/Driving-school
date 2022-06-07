<template>



    <!-- <Hello msg="Cars" link="/AddCar" /> -->
    <div class="hello">
        <!-- <h1>👋 <span>{{msg}}</span> <span class="sd">D</span>riving <span class="sd">S</span>chool!</h1> -->
        <div class="div-search">
            <div class="input-group">
                <span class="input-group-prepend">
                    <div class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-search"></i>
                    </div>
                </span>
                <input class="form-control py-2 border-left-0 border" type="search" placeholder="matricule..."
                    id="example-search-input" v-model="keyword"  />
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border" type="button">
                        Search
                    </button>
                </span>
            </div>
        </div>
        <router-link to="/AddCar">
            <button class="btn btn-warning">
                Ajouter
            </button>
        </router-link>
    </div>
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">

    <div class="content-card">
        <div  v-for="voiture in voitures ">
           <div class="card" v-if="voiture?.matricule.toLowerCase().includes(keyword.toLowerCase())">
            <div class="profil-img">
                 <img :src="'assets/images/' + voiture.photo" alt="">
            </div>

            <h3>{{voiture.marque}}</h3>
           <p class="title">matricule:{{ voiture.matricule }}</p>
            <p class="title">model:{{ voiture.module }}</p>


            <router-link :to="'/detailVoiture/' + voiture.id_voiture">
                <p><button>detaill</button></p>
            </router-link>
            </div>
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
    data() {
        return {
            keyword: '',
            voitures: [],

        }
    },
    methods:{
        getCars(){
            fetch("http://localhost/Statique/Backend/voiture/allVoiture").then(res => res.json()).then(voitures => {
                this.voitures = voitures;
            })
        }
     

    },
    mounted() {
        this.getCars();
    },



    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover: #F8CE03;

.hello {
    display: flex;
    background: white;
    z-index: 999;
    padding: 10px 30px;
    width: 100%;
    top: 0;
    justify-content: space-between;
    align-items: center;

    h1 {
        font-family: ui-sans-serif !important;

        .sd {
        color: #F8CE03;
        font-family: ui-sans-serif !important;


    }
    }



}

@media screen and (max-width: 576px) {
   .hello{ 
           height: 132px;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px 20px;
    align-items: end;
   }
   
}

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}

.content-card {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 10px;
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
    height: 440px;
    margin: auto;
    text-align: center;
    margin-bottom: 40px;
    
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
}

.title {
    color: grey;
    font-size: 18px;
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
