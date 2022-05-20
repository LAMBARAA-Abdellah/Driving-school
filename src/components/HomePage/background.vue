<template>
    <div class="backround">
        <div class="bienvenu">
            <h2>Bienvenu sur le site de la maison de la culture</h2>
            <h1> <span>Friendly</span> & <span>Patient</span> Instructors</h1>

        </div>
        <div class="statistique">
            <div class="teacher">
                <div>
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div>
                    <h1>
                        28
                    </h1>
                    <h2>
                        Teachers
                    </h2>
                </div>
            </div>
            <div class="hours">
                 <div>
                    <i class="	far fa-clock"></i>
                </div>
                <div>
                    <h1>
                        1292
                    </h1>
                    <h2>
                        Trining hours
                    </h2>
                </div>
            </div>
            <div class="years">
                 <div>
                    <i class="fas fa-heart"></i>
                </div>
                <div>
                    <h1>
                        5
                    </h1>
                    <h2>
                        working years
                    </h2>
                </div>
            </div>
            <div class="licence">
                  <div>
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div>
                    <h1>
                        28
                    </h1>
                    <h2>
                        Teachers
                    </h2>
                </div>
            </div>
        </div>

    </div>
</template>
<script>



export default {
    name: 'background',
    props: {
        msg: String
    }
}
</script>

<style lang="scss">
$color: #383838;
$hover:#F8CE03;

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}
@mixin flexicon {
    display: flex;
    justify-content: space-between;
    align-items: center;
   
}

* {
    margin: 0;
    padding: 0;
}

.backround {
    position: relative;
    color: white;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url(../../assets/images/16.jpeg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;

}

.bienvenu {
    padding-top: 200px;

    // margin-left:100px;
    h2 {
        color: white;
        letter-spacing: 3px;
        font-weight: 700;
        padding: 30px;
    }

    h1 {
        color: white;
        font-size: 80px;
        font-weight: bold;
    }

    span {
        color: $hover;

    }

}

.statistique {
    width: 100%;
    position: absolute;
    bottom: 0;
    background-image: url();
    background-color: $color;
    @include flex;
    padding:0 60px;

    .teacher,
    .hours,
    .years,
    .licence {
        @include flexicon;
        width: 350px;
        height: 130px;
        padding: 0 30px;
        margin: 0 30px;
        transform: skew(57.94turn, 180deg);
       
      
    }
    .teacher,.years {
        background-image:  url(../../assets/images/3.png);
         background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
       .hours,.licence {
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5) 20%), url(../../assets/images/19.jpg);
         background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
    i{
    color: $hover;
    }

    h1 {
        font-size: 50px;
        font-weight: bold;
    }

    h2 {
        font-size: 22px;
        font-weight: bold;
    }

    i {
        font-size: 50px;
    }
}

</style>

