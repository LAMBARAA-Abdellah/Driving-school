<template>



    <Hello msg="Students" link="/AddStudent" />
   

    <div class="content-card">
        <div class="card" v-for="(data, index) in datas " :key="index">
            <div class="profil-img">
                <img :src="data.img" alt="John" style="width:100%">
            </div>

            <h1>{{data.name}}</h1>
            <p class="title">Cin:{{data.cin}}</p>
            <p class="title">Tel:{{data.tel}}</p>
            <!-- <div class="total"><h6 class="title">Payé:</h6><h1 class="prix">{{data.totale}}dh</h1></div> -->


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
  
    data(){
        return{
            value: 20.4,
            datas: [
        { img: require(`@/assets/images/sec1.png`),cin:"hh21846",totale:"1000", name: "Nemli Youness", tel : "0652745372" },
        { img: require(`@/assets/images/img1.jpg`), cin:"hh21846",totale:"800", name: " Rabhi", tel : "0652745372" },
        { img: require(`@/assets/images/sec.png`), cin:"hh21846",totale:"2000", name: "Faiza Rabhi", tel : "0652745372" },
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
.total{
    display: flex;
    align-items: center;
    justify-content: center;
    .prix{
        padding:0 10px;
    }
}
</style>
