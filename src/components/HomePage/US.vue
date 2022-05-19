<template>
    <!-- <div class="us">
        <div class="para container">
            <h1>Why Choose Us?</h1>
            <p>We understand that learning to drive isn’t cheap, many driving schools will take advantage of this and
                charge you a larger sum than necessary; not us.</p>

        </div>
        <div class="content container">
            <div class="cardp">
                <div class="card-img">
                    <img src="../../assets/images/Group2.png" alt="">
                </div>
                <div class="card-content">
                    <h4>BEST SAFETY MEASURES</h4>
                    <p>Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
                </div>
            </div>

            <div class="cardp">
                <div class="card-img">
                    <img src="../../assets/images/Group4.png" alt="">
                </div>
                <div class="card-content">
                    <h4>BEST SAFETY MEASURES</h4>
                    <p>Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
                </div>
            </div>

            <div class="cardp">
                <div class="card-img">
                    <img src="../../assets/images/Group5.png" alt="">
                </div>
                <div class="card-content">
                    <h4>BEST SAFETY MEASURES</h4>
                    <p>Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
                </div>
            </div>

            <div class="cardp">
                <div class="card-img">
                    <img src="../../assets/images/Group6.png" alt="">
                </div>
                <div class="card-content">
                    <h4>BEST SAFETY MEASURES</h4>
                    <p>Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
                </div>
            </div>

            <div class="cardp">
                <div class="card-img">
                    <img src="../../assets/images/Group1.png" alt="">
                </div>
                <div class="card-content">
                    <h4>BEST SAFETY MEASURES</h4>
                    <p>Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
                </div>
            </div>

            <div class="cardp">
                <div class="card-img">
                    <img src="../../assets/images/Group7.png" alt="">
                </div>
                <div class="card-content">
                    <h4>BEST SAFETY MEASURES</h4>
                    <p>Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
                </div>
            </div>



        </div>

    </div> -->

    <div class="us">
        <div class="para container">
            <h1>Why Choose Us?</h1>
            <p>We understand that learning to drive isn’t cheap, many driving schools will take advantage of this and
                charge you a larger sum than necessary; not us.</p>

        </div>
        <div class="content container">

            <div class="cardp" v-for="(data, index) in datap " :key="index">
                <div class="card-img">
                    <img :src="data.img" alt="">
                </div>
                <div class="card-content">
                    <h4>{{ data.title }}</h4>
                    <p>{{ data.content }}</p>
                </div>
            </div>



        </div>

    </div>
    <div class="coment">
        <h1>Our studenys Says...</h1>
        <div class="comantaire">
            <div class="etoiles">
                <img src="@/assets/images/Star2.png" alt="">
                <img src="@/assets/images/Star2.png" alt="">
                <img src="@/assets/images/Star2.png" alt="">
                <img src="@/assets/images/Star1.png" alt="">
                <img src="@/assets/images/Star1.png" alt="">
            </div>
            <div>
                {{ arr[current].coment }}

            </div>
            <div>
                <h5>- {{ arr[current].name }}</h5>
            </div>

        </div>

        <div class="face">
            <img src="@/assets/images/Group8.png" alt="">
        </div>

    </div>

    <div class="event">
        <h1>Latest News & Events</h1>
        <div class="all">
            <div class="card-event" v-for="(ev, index) in event " :key="index">
                <div class="event-img">
                    <img :src="ev.img" alt="">
                </div>
                 <div class="date-card">
                    <h1>{{ ev.day }}</h1>
                    <h4>{{ ev.month }}</h4>
                 </div>

                <div class="event-content">
                    <h4>{{ ev.title }} </h4>
                    <p>{{ ev.content }}</p>
                </div>
                
                <img class="more" src="@/assets/images/more.png" alt="">
               
                
            </div>



        </div>
    </div>









    <!-- <div>
        <div>{{ arr[current].name }}</div>
        <button @click="next">click me</button>

    </div> -->
</template>
<script>

// const items = [
//     { coment: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam!", name: "Lambaraa Abdellah" },
//     { coment: " aliquid culpa officia aut! Impedit sit sunt quaerat, odit tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos piente officiis modi at sunt excepturi expedita sint? Sed quibusdamcusandae alias error harum maxime adipisci amet laborum. Perspiciatis inima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit uibusdam sed amet  ab, eius ", name: "Said ouidane" },
//     { coment: " Quaerat provident commodi consectetur veniam similique ad arum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo ugiat, dolorum eligendi quam cupiditate excepturi mollitia maiort. Voluptatem quaerat non architecto ab laudantiumdi minima sunt esse temporibus sint culpa, recusandae aliquam numquam otam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam uasi aliquam eligendi, placeat qui corporis!", name: "aaaaaa vbbbbb" },
// ]

export default {
    name: 'US',
    data() {
        return {
            // arr: items,
            current: 0,
            datap: [
                { img: require(`@/assets/images/Group2.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group4.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group5.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group6.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group1.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group7.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },

            ],
            arr: [
                { coment: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam!", name: "Lambaraa Abdellah" },
                { coment: "fdgdgd ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam!", name: "Said ouidane" },
                { coment: "ezezez ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam!", name: "aaaaaa vbbbbb" },

            ],
            event: [
                { img: require(`@/assets/images/5.jpeg`),day:"18" ,month:"JULY", title: "DANGERS OF SLEEPING WHILST SLEEP DEPRIVED", content: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam...  " },
                { img: require(`@/assets/images/23.jpeg`),day:"15" ,month:"OCTOBER", title: "DANGERS OF SLEEPING WHILST SLEEP DEPRIVED", content: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam...  " },
                { img: require(`@/assets/images/16.jpeg`),day:"22" ,month:"OCTOBER", title: "DANGERS OF SLEEPING WHILST SLEEP DEPRIVED", content: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aliquam, in iusto aperiam culpa quidem sit quibusdam iure debitis non minus pariatur. Iusto unde harum nisi! Rem veniam facilis aliquam..." },
            ]




        }
    },
    methods: {
        next() {
            this.current = (this.current + 1) % this.arr.length
        }
    },
    props: {
        msg: String
    },
    mounted() {
        setInterval(() => {
            this.next()
        }, 2000)
    },
}
</script>

<style lang="scss" scoped>
$color: #383838;
$hover:#F8CE03;

@mixin flex($direction:row) {
    display: flex;
    flex-direction: $direction;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    // align-items: baseline;
}

h1 {
    font-weight: 600;
    font-size: 2rem;
}

.us {
    .para {
        width: 70%;
        font-weight: bold;
        color: $color;
    }

    .content {
        @include flex();
        background-color: rgb(249, 248, 248);
        width: 100%;
        padding: 3%;

        .cardp {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 80%;
            width: 300px;
            margin: 0 0 20px 0px;

            .card-img {
                width: 100px;
                height: 100px;
                margin-bottom: 40px;
                background: rgb(224, 224, 224);
                display: flex;
                justify-content: center;
                align-items: center;
                transform: rotateY(0deg) rotate(45deg);

                img {
                    width: 50px;
                    height: 50px;
                    transform: rotateY(0deg) rotate(-45deg);
                }

            }

            h4,
            p {
                font-size: 130%;
            }

            h4 {
                font-weight: bold;
            }
        }

    }
}

.coment {
    position: relative;
    padding: 30px;
    margin: 30px 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 500px;
    background-image: url(@/assets/images/26.jpg);
    color: white;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url(@/assets/images/26.jpg);
    background-position: center;
    background-size: cover;

    h1 {
        margin-bottom: 50px;
    }

    .comantaire {
        padding: 70px 100px 20px 100px;
        border: solid 5px #F8CE03;
        width: 80%;
        height: 70%;

        .etoiles {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        h5 {
            padding: 10px;
            color: $hover;
        }

    }

    .face {
        position: absolute;
        margin-top: 44px;
    }
}

.event {
    margin: 20px 0;

    .all {
        @include flex();
        justify-content: space-evenly;

        .card-event {
            width: 400px;
            background-color: rgba(0, 0, 0, 0.04);
            box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.4);
            text-align: left;
            position: relative;
        

            .event-img img {
                width: 100%;
            }
            .date-card{
                background: #383838;
                color: white;
                width: 100px;
                height: 100px;
                position: absolute;
                top: 0;
                text-align: center;
                h4{
                    font-size: 18px;
                }
                h1{
                    font-size: 40px;
                }
            }
            
            .event-content{
                padding: 20px 10px;
                h4 {
                    color: black;
                    font-family: 'open sans';
                    font-weight: 600;
                    font-size: 120%;
                }
               
            }
            .more{
                    margin: -20px 0px 20px 20px;
                    width: 40px;
            }
        }
    }


}
</style>

