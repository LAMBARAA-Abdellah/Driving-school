<template>



    <Hello />
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">

    <div class="content-card">
        <div class="card" v-for="(data, index) in datap " :key="index">
            <div class="profil-img">
                <img :src="data.img" alt="John" style="width:100%">
            </div>

            <h1>John Doe</h1>
            <p class="title">CEO & Founder, Example</p>
            <p>Harvard University</p>


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
            datap: [
        { img: require(`@/assets/images/m1.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/m2.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/m3.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/v1.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/v2.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/v3.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/v4.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/c1.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/c2.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
        { img: require(`@/assets/images/car.png`), title: "Audi 8", description: "Our Instructors are Highly Trained ." },
       



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

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}

.content-card {
    display: flex;
    flex-wrap: wrap;
}

.profil-img {
    width: 300px;
    height: 300px;

    img {
        display: block;
        width: 100%;
        height: 100%;
        object-position: bottom;
  

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
