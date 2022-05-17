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
                    <p>{{data.content}}</p>
                </div>
            </div>



        </div>

    </div>
    <div class="coment">
        <h1>Our studenys Says...</h1>
        <div>
        <div>

</div>
        
        
        </div>
    
    
    
    
    </div>








    
    <div>
        <div>{{ arr[current] }}</div>
        <button @click="next">click me</button>

    </div>
</template>
<script>

const items = ["tester", "abdo"]

export default {
    name: 'US',
    data() {
        return {
            arr: items,
            current: 0,
            datap: [
                { img: require(`@/assets/images/Group2.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group4.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img:require(`@/assets/images/Group5.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group6.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group1.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },
                { img: require(`@/assets/images/Group7.png`), title: "BEST SAFETY MEASURES", content: "Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road." },


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
        }, 6000)
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

</style>

