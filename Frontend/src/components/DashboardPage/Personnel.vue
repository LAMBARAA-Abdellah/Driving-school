<template>



<div class="hello">
        <!-- <h1>👋 <span>{{msg}}</span> <span class="sd">D</span>riving <span class="sd">S</span>chool!</h1> -->
        <div class="div-search">
            <div class="input-group">
                <span class="input-group-prepend">
                    <div class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-search"></i>
                    </div>
                </span>
                <input class="form-control py-2 border-left-0 border" type="search" value="..."
                    id="example-search-input" />
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border" type="button">
                        Search
                    </button>
                </span>
            </div>
        </div>
        <router-link to="/AddPersonnel">
            <button class="btn btn-warning">
                Ajouter
            </button>
        </router-link>
    </div>
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">


    <div class="content-card">
        <div class="card" v-for="(data, index) in datap " :key="index">
            <div class="profil-img">
                <img :src="data.img" alt="John" style="width:100%">
            </div>

            <h4>{{ data.name }}</h4>
            <p class="title">Cin:{{ data.cin }}</p>
            <p class="title">Tel:{{ data.tel }}</p>
            <p>{{ data.profession }}</p>


            <p><button>detaill</button></p>
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
            datap: [
                { img: require(`@/assets/images/sec1.png`), cin: "hh21846", profession: "secritaire", name: "Faiza Rabhi", tel: "0652745372" },
                { img: require(`@/assets/images/img1.jpg`), cin: "hh27344", profession: "director", name: "Lambaraa Abdellah", tel: "0632193749" },
                { img: require(`@/assets/images/sec.png`), cin: "hh86293", profession: "Comptable", name: "Alami Nazha", tel: "0719231934" },
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
$hover:#F8CE03;
.hello {
    display: flex;
    background: white;
    z-index: 999;
    padding: 10px 10px;
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
    padding: 10px 30px;
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
    margin: auto;
    text-align: center;
    margin-bottom: 20px;
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
