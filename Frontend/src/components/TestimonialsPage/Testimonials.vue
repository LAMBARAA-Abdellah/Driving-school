<template>
<hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">
    <div>
        <h1>What’s Our Students Say...</h1>
        <p>Read some comments from students that have passed their driving lessons with us.</p>

        <div class="coment">
            
            <div class="contall" v-for="(data,index) in datap" :key="index">
            
            <div class="comantaire" >
                <div class="etoiles">
                    <img :src="data.img" alt="">
                </div>
                <div>
                    {{data.content}}

                </div>
                <div>
                    <h5>-{{data.title}}</h5>
                </div>

            </div>

            <div class="face">
                <img src="@/assets/images/Group8.png" alt="">
            </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'test',
    components: {

    },
    data() {
        return {

            datap: [
                { img: require(`@/assets/images/star4.png`), title: "Lmabraa Abdellah", content: "John is a fantastic instructor and made him feel really comfortable. They focused on everything important and when it came test time my nephew wasn’t nervous at all because he had been trained so well. And by the way… he passed the driving test and got his license on the first try! The staff is awesome too! They were able to maneuver through any schedule conflicts with such ease.”" },
                { img: require(`@/assets/images/star5.png`), title: "Ahmed jaajaa", content: "I was able to pass my practice driving test today on my first attempt,all thanks to John.He really is an amazing instructor and I would definitely recommend him to anyone looking for an instructor who is willing to go the extra mile when it comes to easing your experience throughout the whole process,such as booking your test on your behalf. Although I might have made many mistak" },
                { img: require(`@/assets/images/star4.png`), title: "Mohssine Lambaraa", content: "I really enjoyed my time learning to drive with Safe Drive Driving School. Both of my instructors Alex ( and John who stepped in when Alex was taken ill) gave me that push to finally book my test and helped me gain the confidence I needed to pass my test. I passed first time. I would recommend the company to anyone considering to learn to drive." },
                { img: require(`@/assets/images/star5.png`), title: "Ayoub bassidi", content: "John is a fantastic instructor and made him feel really comfortable. They focused on everything important and when it came test time my nephew wasn’t nervous at all because he had been trained so well. And by the way… he passed the driving test and got his license on the first try! The staff is awesome too! They were able to maneuver through any schedule conflicts with such ease.”." },
                { img: require(`@/assets/images/star5.png`), title: "Faiza Rabhi", content: "quisquam eius sed odit fugiat iusto fuga praesentiumoptio, eaque rerum! Provident similique accusantium nemo autem. Veritatibcaecati tenetur iure eius earumolestias architecto voluptate aliquamhil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,enetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,uia. Quo neque error repudiandae fuga? Ipsa laudanti" },
                

            ],

        }
    },
}
</script>

<style lang="scss" scoped >
h1 {
    font-weight: 600;
    font-size: 2rem;
}
h5{
    font-weight: 700;
    color: #000;
    padding: 20px;
    font-size: 100%;
}
.contall{
    position: relative;
    display: flex;
    justify-content: center;
}
.coment {
    padding: 30px;
    margin: 30px 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    height:auto;


    h1 {
        margin-bottom: 50px;
    }

    .comantaire {
        padding: 70px 100px 20px 100px;
        border: solid 2px #F8CE03;
        width: 90%;
        height: 70%;
        margin:3% 5%;

        .etoiles {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

    

    }

    .face {
        position: absolute;
       top: -4.5%;
    }
}
@media screen and (max-width: 576px) {
    h1{ 
        font-size: 1.5rem;
    }
  .coment{ 
      padding: 0;
      .comantaire{
          padding: 70px 10px 20px 10px;
    margin: 8% 5%;
}
 
  }
}
</style>
