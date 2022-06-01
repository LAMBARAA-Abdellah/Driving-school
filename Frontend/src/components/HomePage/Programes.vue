<template>
    <div class="Programes">
        <h1>Our Programes</h1>
        <div class="content">
            <div class="sous-content">
                <div class="card">
                    <div>
                        <img src="../../assets/images/16.jpeg" alt="">
                        <div class="border1">

                            <h2>1</h2>

                        </div>
                    </div>

                </div>
                <div class="title">
                    <h2>Teen Drivers Education</h2>
                </div>
            </div>
             <div class="sous-content">
                <div class="card">
                    <div>
                        <img src="../../assets/images/15.jpeg" alt="">
                        <div class="border1">

                            <h2>2</h2>

                        </div>
                    </div>

                </div>
                <div class="title">
                    <h2>Adult in car lessons</h2>
                </div>
            </div>
             <div class="sous-content">
                <div class="card">
                    <div>
                        <img src="../../assets/images/23.jpeg" alt="">
                        <div class="border1">

                            <h2>3</h2>

                        </div>
                    </div>

                </div>
                <div class="title">
                    <h2>TStick shift lessons</h2>
                </div>
            </div>
             <div class="sous-content">
                <div class="card">
                    <div>
                        <img src="../../assets/images/24.jpg" alt="">
                        <div class="border1">

                            <h2>4</h2>

                        </div>
                    </div>

                </div>
                <div class="title">
                    <h2>Teen Drivers Education</h2>
                </div>
            </div>
             <div class="sous-content">
                <div class="card">
                    <div>
                        <img src="../../assets/images/11.jpeg" alt="">
                        <div class="border1">

                            <h2>5</h2>

                        </div>
                    </div>

                </div>
                <div class="title">
                    <h2>Teen Drivers Education</h2>
                </div>
            </div>
             <div class="sous-content">
                <div class="card">
                    <div>
                        <img src="../../assets/images/18.jpeg" alt="">
                        <div class="border1">

                            <h2>6</h2>

                        </div>
                    </div>
                </div>
                <div class="title">
                    <h2>Teen Drivers Education</h2>
                </div>
            </div>

           


        </div>

    </div>
</template>
<script>



export default {
    name: 'Programes',
    props: {
        msg: String
    }
}
</script>

<style lang="scss" scoped>
$color: #383838;
$hover:#F8CE03;
h1 {
    font-weight: 600;
    font-size: 2rem;
    margin: 10px;
}
@mixin flex($direction:row) {
    display: flex;
    flex-direction: $direction;
    justify-content: space-between;
    align-items: center;
    
}

.content {
    //padding: 40px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;

    .sous-content {
        display: flex;
        flex-direction: column;
        align-items: baseline;

        h2 {
            font-size: 20px;
        }
    }
}

.card {
    position: relative;
    width: 360px;
    height: 220px;
    transform: skew(-20deg);
    margin: 0 0 10px 0;
    border: none;

    img {
        width: 360px;
        height: 220px;
        border-radius: 20px;

    }
}

.border1 {
    position: absolute;
    bottom: -2px;
    /* width: 40px; */
    /* height: 40px; */
    width: 0;
    height: 0;
    border: 25px solid transparent;
    border-bottom-color: #F8CE03;
    transform: skew(20deg);
    color: white;
    text-align: center;
    margin-right: auto;
    margin-left: 40%;
    display: flex;
    justify-content: center;

    h2 {
        margin-top: 10px;
        z-index: 1;
        font-size: x-large;

    }
}

.border1::after {
    width: 0;
    height: 0;
    content: '';
    position: absolute;
    left: -25px;
    top: 25px;
    border: 25px solid transparent;
    border-top-color: $hover;
}
.title h2{
    font-size: 20px;
    font-weight: 700;
    margin: 25px;
}

@media screen and (max-width: 576px) {
    .content{
    margin-left: -11%;
    
    .card{
        width: 250px;
        height: 200px;
          transform: skew(-12deg);
        img{
             width: 300px;
        height: 200px;
        }
        .border1{
            margin-left: 50%;
            transform: skew(12deg);
        } 
    }

 }  
    
}
</style>

