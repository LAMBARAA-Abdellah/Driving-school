<template>
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">
    <h1 class="title">Company Overview</h1>
    <div class="about">
        <div>
            <img src="../../assets/images/confident-business-team-with-leader.jpg" alt="">

        </div>
        <div class="para">
            <h1>
                Affordable, Effective and Convenient Driving Lessons
            </h1>
            <p>

                Safe Drive Driving School has designed classes with the busy student in mind. We have a very flexible
                system of classes that allows students to take the classes in any order they wish and at their own pace.
                In some schools you have a very strict schedule for taking the classes and this does not work into a lot
                of the current schedules of kids busy lives.
            </p>
            <div class="A1">
                <i class="fas fa-check-circle"></i>
                <p>We know all of the different test routes</p>

            </div>
            <div class="A1">
                <i class="fas fa-check-circle"></i>
                <p>We know all of the different test routes</p>

            </div>
            <div class="A1">
                <i class="fas fa-check-circle"></i>
                <p>We know all of the different test routes</p>

            </div>
            <div class="A1">
                <i class="fas fa-check-circle"></i>
                <p>We know all of the different test routes</p>

            </div>

        </div>




    </div>
    <div class="route">
        <h1>How It Work?</h1>
        <p>There are only a few easy steps until your traffic ticket is dismissed, your driving record is clean and your
            auto insurances rates are safe from increases:</p>
        <img src="@/assets/images/img-02.png" alt="">
    </div>
    <div class="advantages">
        <h1 class="adg">Our Advantages</h1>
        <div class="container">
            <div class="monitor">
                <img src="@/assets/images/img-icon-01.png" alt="">
                <h2>100%</h2>
                <h5>STUDENTS APPROVED</h5>
            </div>
            <div class="monitor">
                <img src="@/assets/images/img-icon-02.png" alt="">
                <h2>100%</h2>
                <h5>STUDENTS APPROVED</h5>
            </div>
            <div class="monitor">
                <img src="@/assets/images/img-icon-03.png" alt="">
                <h2>100%</h2>
                <h5>STUDENTS APPROVED</h5>
            </div>
            <div class="monitor">
                <img src="@/assets/images/img-icon-04.png" alt="">
                <h2>100%</h2>
                <h5>STUDENTS APPROVED</h5>
            </div>
        </div>

    </div>

    <div class="teams">
        <h1>Our Teams</h1>
        <p>We have the most expert and experienced driving coaches in the industry</p>
        <div class="containner">
            <div class="team">
                <img src="@/assets/images/img1.jpg" alt="">
                <h2>John Doe</h2>
                <h5>CEO</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam, doloremque.
                </p>
            </div>
            <div class="team">
                <img src="@/assets/images/IMG_1462.jpg" alt="">
                <h2>John Doe</h2>
                <h5>CEO</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam, doloremque.
                </p>
            </div>
            <div class="team">
                <img src="@/assets/images/24.jpg" alt="">
                <h2>John Doe</h2>
                <h5>CEO</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam, doloremque.
                </p>
            </div>
            <div class="team">
                <img src="@/assets/images/IMG_1439.jpg" alt="">
                <h2>John Doe</h2>
                <h5>CEO</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam, doloremque.
                </p>
            </div>
            <div class="team">
                <img src="@/assets/images/12.jpeg" alt="">
                <h2>John Doe</h2>
                <h5>CEO</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam, doloremque.
                </p>
            </div>
            
        </div>

    </div>

</template>

<script>



export default {
    name: 'navbar',
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

h1 {
    font-size: 30px;
    font-weight: bold;
    color: #383838;
}

.title {
    margin-top: 30px
}

.about {
    @include flex();
    align-items: flex-start;
    text-align: left;

    img {
        padding: 50px;
        width: 50vw;
        height: 100%;
    }

    .para {
        padding: 50px
    }

    .A1 {
        display: flex;

        align-items: flex-start;

        i {
            padding: 0 20px;
        }
    }

    button:hover {
        background-color: $hover;
        color: black;
        border: none;
    }

}
.route p{
        margin: 2% 20%;
}
.advantages {
    margin: 20px 0;
    padding: 80px;
    height: 500px;
    color: white;
    background: linear-gradient(to top, rgba(44, 44, 44, 0.5) 50%, rgba(44, 44, 44, 0.5) 50%), url(../../assets/images/tttt.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

    .adg {
        color: white;
        font-weight: 600;
        font-size: 50px;
    }

    h2 {
        color: $hover;
        font-weight: bold;
        margin: 10px
    }

    .container {
        @include flex();
        margin-top: 40px;
    }
}

.teams {
    margin: 50px;

    h1 {
        font-size: 40px;
    }

    .containner {
        margin: 40px 0;
        @include flex();

        .team {
            color:black;
            img {
                // image cercle
                border-radius: 50%;
                width: 200px;
                height: 200px;
                        image-rendering: -webkit-optimize-contrast;
                image-rendering: -moz-crisp-edges;
                background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

            }
        }
    }
}
</style>
