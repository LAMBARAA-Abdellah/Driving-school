<template>
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">

    <div class="wrapper-stepper">
        <div class="stepper">
            <div class="stepper-progress">
                <div class="stepper-progress-bar" :style="'width:' + stepperProgress"></div>
            </div>

            <div class="stepper-item" :class="{ 'current': step == item, 'success': step > item }" v-for="item in 4"
                :key="item">
                <div class="stepper-item-counter">
                    <img class="icon-success" src="@/assets/images/chek.png.png" alt="">
                    <span class="number">
                        {{ item }}
                    </span>
                </div>
                <span class="stepper-item-title">
                    Paso {{ item }}
                </span>
            </div>
        </div>

        <div class="stepper-content" v-for="item in 4" :key="item">
            <div class="stepper-pane" v-if="step == item">
                <!-- {{ test }}
                Estas en el paso <span class="tx-green-1">{{ item }}</span> aqui mostrarás el contenido :D -->
                <h1>Adult In-Car Lessons</h1>
                <p>All Inclusive programs provide the student with 30 hours of class, and all class materials. We offer
                    weekday classes, Saturday/Sunday classes, Saturday only, and Sunday only classes</p>
                <div class="cardP">
                    <img :src="data[item - 1].img" alt="">
                    <!-- <pre>{{ JSON.stringify(data[item - 1]) }}</pre> -->
                    <div class="content">
                        <h1>Programs Available</h1>
                        <div class="ad">
                            <div class="A1">
                                <i class="fas fa-check-circle"></i>
                                <p>Complete Course Options (Classroom + Behind the Wheel Lessons)</p>

                            </div>
                            <div class="A1">
                                <i class="fas fa-check-circle"></i>
                                <p>Partial Course Options (Behind the Wheel Lessons Only)</p>

                            </div>
                            <div class="A1">
                                <i class="fas fa-check-circle"></i>
                                <p>Partial Course Options (Classroom Instruction Only)</p>

                            </div>
                            <div class="A1">
                                <i class="fas fa-check-circle"></i>
                                <p>Additional Practice Hours (Behind the Wheel Lessons)</p>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="text">
                    <h1>Program Overview</h1>
                    <p>We provide free pick up and drop off at home or school for all behind-the-wheel lessons. And, we
                        offer a payment plan at no additional charge. Also, the student will choose from one of the
                        following driving programs: The Basic Course includes 6 hours of in-car driving & 6 hours of
                        in-car observation; The Advantage Plus Program includes 8 hours of all private lessons (no need
                        to do any observation); The Classic Experience includes 12 hours of all private lessons. All
                        programs earn state certification and meet all high school graduation requirements. We also
                        offer 25 and 50 hours behind-the-wheel programs.

                        Our instructor’s travel time is never deducted from the lesson. We guarantee to cover all phases
                        of driving including expressway and all forms of parking.

                        There are never any extra charges for registration, make-up classes, or payment plan. When you
                        have completed the class, and, as soon as you complete the behind-the-wheel lessons and
                        observation if necessary, we will immediately certify you with the Secretary of State; and will
                        also mail you your Adams certificate, which is used toward high school graduation requirements
                        and your insurance discount.

                        The students are required to do 30 hours of class. They may miss up to 4 sessions, all of which
                        must be made up. Students can make up missed classes by attending the same class missed the
                        following month. All arrangements for make-up can be made by contacting our office:
                        800-123-4567.

                        We also have programs for those teens that need to take only the behind-the-wheel or class.

                        Program bundles driving and classroom available
                        Online account access 24/7
                    </p>
                    <div class="quality">
                        <div class="txt">
                            <div class="ad">
                                <div class="A1">
                                    <i class="fas fa-check-circle"></i>
                                    <p>Complete Course Options (Classroom + Behind the Wheel Lessons)</p>

                                </div>
                                <div class="A1">
                                    <i class="fas fa-check-circle"></i>
                                    <p>Partial Course Options (Behind the Wheel Lessons Only)</p>

                                </div>
                                <div class="A1">
                                    <i class="fas fa-check-circle"></i>
                                    <p>Complete Course Options (Classroom + Behind the Wheel Lessons)</p>

                                </div>
                                <div class="A1">
                                    <i class="fas fa-check-circle"></i>
                                    <p>Partial Course Options (Behind the Wheel Lessons Only)</p>

                                </div>
                                <div class="A1">
                                    <i class="fas fa-check-circle"></i>
                                    <p>Partial Course Options (Classroom Instruction Only)</p>

                                </div>
                                <div class="A1">
                                    <i class="fas fa-check-circle"></i>
                                    <p>Additional Practice Hours (Behind the Wheel Lessons)</p>

                                </div>

                            </div>


                        </div>

                        <div class="ct">
                            <div class="tel">
                                <div>
                                    <img src="@/assets/images/tel1.png" alt="">
                                </div>
                                <div class="body">
                                    <div>
                                        <p><b>PHONE 24/7 </b></p>
                                    </div>
                                    <p> +212 652086766 <br> Fax: 718-724-3312</p>
                                </div>

                            </div>
                            <div class="time">

                                <div>
                                    <img src="@/assets/images/horaire.png" alt="">


                                </div>
                                <div class="body">
                                    <p> <b>OPERATING HOURS</b> </p>
                                    <p>
                                        Mon-Fri: 9:00 am – 5:00 pm <br> Sat-Sun: 11:00 am – 16:00 pm
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>





            </div>

        </div>

        <div class="controls">
            <button class="btn" @click="previous" :disabled="step == 1">
                Anterior
            </button>
            <button class="btn btn--green-1" @click="next" :disabled="step == 4">
                Siguiente
            </button>
        </div>
    </div>


</template>

<script>



export default {
    name: 'Programe',
    inject: ["test"],
    props: {
        msg: String,
    },
    data() {
        return {
            step: 1,
            data: [
                { title: "Adult In-Car Lessons", img: require(`@/assets/images/pr1.jpg`) },
                { title: "Defensive Driving", img: require(`@/assets/images/pr2.jpg`) },
                { title: "Winter Driving", img: require(`@/assets/images/PR3.jpg`) },
                { title: "Defensive Driving", img: require(`@/assets/images/PR4.jpg`) },
            ]
        }
    },
    methods: {
        next() {
            if (this.step <= 4) {
                this.step++;
            }
            window.scrollTo({ top: 0, behavior: 'smooth' })
        },
         previous() {
            if (this.step >= 1) {
                this.step--;
            }
            window.scrollTo({ top: 0, behavior: 'smooth' })
        }
    },
    computed: {
        stepperProgress() {
            if (this.step >= 4) {
                return "100%"
            }
            return (100 / 3) * (this.step - 1) + '%'
        }
    },

}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;


$default : #C5C5C5;
$green-1 : #F8CE03;
$transiton : all 500ms ease;

h1 {
    font-size: 30px;
    font-weight: bold;
    color: #383838;
}

.A1 {
    display: flex;


    i {
        padding: 0 20px;
    }
}

/*
body{
    background-image: linear-gradient(60deg, #F8CE03 0%, #fbed96 100%);
    color: #ffffff;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
}
*/
.tel,
.time {
    display: flex;
    margin: 20px;

    .body {
        padding: 0 50px;

    }
}

.tx-green-1 {
    color: $green-1;
    font-weight: 600;
}

.wrapper-stepper {
    background-color: #fff;
    padding: 60px;
    border-radius: 32px;
    box-shadow: rgba($color: #000000, $alpha: 0.09);
}

.stepper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    position: relative;
    z-index: 0;
    margin-bottom: 24px;

    &-progress {
        position: absolute;
        background-color: $default;
        height: 2px;
        z-index: -1;
        left: 0;
        right: 0;
        margin: 0 auto;

        &-bar {
            position: absolute;
            left: 0;
            height: 100%;
            width: 0%;
            background-color: $green-1;
            transition: $transiton;
        }
    }
}

.stepper-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: $default;
    transition: $transiton;

    &-counter {
        height: 68px;
        width: 68px;
        display: grid;
        place-items: center;
        background-color: #fff;
        border-radius: 100%;
        border: 2px solid $default;
        position: relative;

        .icon-success {
            position: absolute;
            opacity: 0;
            transform: scale(0);
            width: 24px;
            transition: $transiton;
        }

        .number {
            font-size: 22px;
            transition: $transiton;
        }
    }

    &-title {
        position: absolute;
        font-size: 14px;
        bottom: -24px;
    }
}

.stepper-item.success {
    .stepper-item-counter {
        border-color: $green-1;
        background-color: #fce780;
        color: #fff;
        font-weight: 600;

        .icon-success {
            opacity: 1;
            transform: scale(1);
        }

        .number {
            opacity: 0;
            transform: scale(0);
        }
    }

    .stepper-item-title {
        color: $green-1;
    }
}

.stepper-item.current {
    .stepper-item-counter {
        border-color: $green-1;
        background-color: $green-1;
        color: #fff;
        font-weight: 600;
    }

    .stepper-item-title {
        color: #818181;
    }
}

.stepper-pane {
    color: #333;
    text-align: center;
    padding: 20px 60px;
    box-shadow: 0 8px 12px rgba($color: #000000, $alpha: 0.09);
    margin: 40px 0;

    .cardP {
        display: flex;

        img {
            width: 50%;
            height: 300px;
            object-fit: cover;
        }

        .content {
            .ad {
                padding: 40px 0 0 10px;


            }

        }
    }

    .text {
        margin: 40px;
        text-align: start;

        h1 {
            text-align: center;
        }
    }

    .quality {
        display: flex;
        justify-content: space-between;

    }

}

.controls {
    display: flex;
}

.btn {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 6px 16px;
    border: 1px solid;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    line-height: 1.5;
    transition: all 150ms;
    border-radius: 4px;
    width: fit-content;
    font-size: 0.75rem;
    color: #333;
    background-color: #f0f0f0;
    border-color: #f0f0f0;

    &:disabled {
        opacity: 0.5;
        pointer-events: none;
    }

    &--green-1 {
        background-color: $green-1;
        border-color: $green-1;
        color: #fff;
        margin-left: auto;
    }
}
</style>
