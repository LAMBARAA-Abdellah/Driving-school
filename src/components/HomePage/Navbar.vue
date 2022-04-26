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
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-google"></i>
        </div>
    </div>
    <div class="nav-bar">
        <div class="logo">
            <img src="../../assets/images/logo2.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
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
<style scoped lang="scss">
$color-sousnavbar: #383838;
$hover:#F8CE03;



@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.sous-nav {
    @include flex;
    background-color: $color-sousnavbar;
    padding: 20px;
    color: #fff;
    font-weight: bold;
    font-size: 14px;
    border-bottom: 1px solid #fff;
}

.sous-nav {
    div {
        @include flex;
        cursor: pointer;
    }

    i {
        margin-right: 10px;
    }

    .social {

        i {
            width: 20px;
            height: 20px;
            cursor: pointer;
            color: black;
            align-items: center;
            border: 10px;
            font-size: 20px;
            padding: 2px;
            border-radius: 5px;
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
.nav-bar{
    @include flex;


    img{
    width: 300px;
    
    }

}
</style>
