<template>
    <div class="sous-nav">
        <div class="adresse">
            <i class="fas fa-map-marker-alt"></i>
            <p>3261 Anmoore Road Brooklyn, NY 11230</p>
        </div>
        <div class="mobile">
            <i class="fas fa-phone-alt"></i>
            <p>+212652086766</p>
        </div>
        <div class="email">
            <i class="fas fa-envelope"></i>
            <p> abdellahlambaraa@gmail.com </p>
        </div>
        <div class="time">
            <i class="fas fa-clock"></i>
            <p>9:00 AM to 6:00 PM / 6 Days</p>
        </div>
        <div class="social">
            <i class="fab fa-facebook-f"></i>
            <!-- <i class="fab fa-facebook"></i> -->
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-google"></i>
        </div>
    </div>
    <div class=" nav-bar ">
        <div class="logo">
         <!-- <img src="../../assets/images/logo3.png" alt=""> -->
            <img src="../../assets/images/Drv2.svg" alt="">

        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Faqs</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Programe</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <button>
            Order now
        </button>

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

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;



@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}


.sous-nav {
  @include flex;
    background-color: $color-sousnavbar;
    padding: 10px;
    color: #fff;
    font-weight: bold;
    font-size: 14px;
    padding: 6px 30px;
    height: 45px;
    div {
        @include flex;
        cursor: pointer;
        font-size: 15px;

    }

    i {
        margin-right: 10px;
    }

    .social {

        i {
            width: 30px;
            height: 30px;
            cursor: pointer;
            color: black;
            align-items: center;
            border: 10px;
            font-size: 23px;
            padding: 3px;
            border-radius: 25px;
            background-color: #fff;
        }

        i:hover {
            color: white;
            background-color: $hover;
        }
    }

    i:hover {
        color: $hover;
    }

}

.nav-bar {
    height: 140px;
    @include flex;
    padding: 10px 100px;

    img {
        width: 150px;
        height: 120px;
        background-size: cover;
        background-position: center;
    }

    .logo {
        h1 {
            font-family: "Nico Moji"
        }
    }

    ul {
        @include flex;
        list-style: none;
        margin: 0;
        padding: 0;

        li {
            @include flex;

            a {
                @include flex;
                text-decoration: none;
                color: black;
                font-size: 18px;
                padding: 10px;
                cursor: pointer;
                font-weight: bold;
                font-size: 20px;
                margin: 20px;

                &:hover {
                    color: $hover;
                }
            }
        }

    }

    button {
        width: 120px;
        height: 40px;
        border: none;
        background-color: $color-sousnavbar;
        color: #fff;
        font-weight: bold;
        border-radius: 10px;
    }

    button:hover {
        background-color: $hover;
        color: black;
        border:none;
    }
}
</style>
