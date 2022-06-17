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
            <i class="fab fa-whatsapp"></i>
            





        </div>
    </div>
    <div class="navbar">
    <div class="logo">
            <!-- <img src="../../assets/images/logo3.png" alt=""> -->
            <img src="../../assets/images/Drv2.svg" alt="">

        </div>
        <div class="container nav-container">
        
            <input class="checkbox" type="checkbox" @click="show=!show" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="menu-items">
                <ul>
                <router-link to="/">
                    <li><a>Home</a></li>
                </router-link>
                <router-link to="/about">
                    <li><a>About</a></li>
                </router-link>
                <router-link to="/programe">
                    <li><a>Programes</a></li>
                </router-link>
                <router-link to="/Services">
                    <li><a>Services</a></li>
                </router-link>
                <router-link to="/Testimonials">
                    <li><a>Testimonials</a></li>
                </router-link>
                <router-link to="/Contact">
                    <li><a>Contact</a></li>
                </router-link>
            </ul>
            </div>
        </div>
    </div>
    <div class=" nav-bar ">
        <div class="logo">
            <!-- <img src="../../assets/images/logo3.png" alt=""> -->
            <img src="../../assets/images/Drv2.svg" alt="">

        </div>
        <div class="menu">
            <ul>
                <router-link to="/">
                    <li><a>Home</a></li>
                </router-link>
                <router-link to="/about">
                    <li><a>About</a></li>
                </router-link>
                <router-link to="/programe">
                    <li><a>Programes</a></li>
                </router-link>
                <!-- <router-link to="/Services">
                    <li><a>Services</a></li>
                </router-link> -->
                <router-link to="/Testimonials">
                    <li><a>Testimonials</a></li>
                </router-link>
                <router-link to="/Contact">
                    <li><a>Contact</a></li>
                </router-link>
            </ul>



        </div>
        <button @click="client()">
            Order now
        </button>

    </div>


    
<div class="popUp1" id="addC">
         <!-- <img @click="hideC()" class="x" src="" alt="x" > -->
          <span @click="hideC()" class="token" :class="{'show':show}" aria-hidden="true">&times;</span>
                    <h4 class="send">Send your message</h4>
         <div class="modal-body">
        <form>
          <div class="form-group">
            <!-- <label for="recipient-name" class="col-form-label">Full name</label> -->
            <input type="text" class="form-control" id="recipient-name" placeholder="Full name..." v-model="MessageForm.name">
          </div>
            <div class="form-group">
            <!-- <label for="recipient-name" class="col-form-label">Phone</label> -->
            <input type="tel" class="form-control" id="recipient-name" placeholder="Phone..." v-model="MessageForm.phone">
          </div>
            <div class="form-group">
            <!-- <label for="recipient-name" class="col-form-label">Email</label> -->
            <input type="email" class="form-control" id="recipient-name" placeholder="Email adresse..." v-model="MessageForm.email">
          </div>
          <div class="form-group">
            <!-- <label for="message-text" class="col-form-label">Message:</label> -->
            <textarea class="form-control" id="message-text" placeholder="Your essage..." v-model="MessageForm.message"></textarea>
          </div>
          <input @click="AddMessage()" class="btn " type="submit" value="Envoyer">
        </form>
        
      </div>

    </div>

</template>

<script>



export default {
    name: 'navbar',
    props: {
        msg: String
    },
    data(){
        return {
        show: false,
            MessageForm: {
                name: '',
                email: '',
                phone: '',
                message: ''
            }
        
        }
    },
     methods: {
       client(){
             document.getElementById("addC").classList.toggle("show");
        },
       hideC() {
         document.getElementById("addC").classList.remove("show");

        },
        AddMessage() {
            fetch("http://localhost/Statique/Backend/chat/addMessage", {
                method: "POST",
                body: JSON.stringify({
                    name: this.MessageForm.name,
                    email: this.MessageForm.email,
                    phone: this.MessageForm.phone,
                    message: this.MessageForm.message
                })
            }).then((reponse => {
                return reponse.json();
            })).then((data) => {
                if (data) {
                    this.MessageForm.name = '';
                    this.MessageForm.email = '';
                    this.MessageForm.phone = '';
                    this.MessageForm.message = '';
                }

            });
        }

    

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

* {
    text-decoration: none !important;
}

.navbar{
    display: none;
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
    @include flex;
    padding: 0 100px;
    height: 100px;

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
        border: none;
    }

}



  .show {
    display: block !important;
  }
.popUp1 {
    background-color: #fff;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 70%;
    margin-left: 32%;
    border-radius: 5px;
    position: absolute;
    top: 7%;
    width: 40%;
    margin-top: 9%;
    padding: 1%;
    display: none;
    z-index: 999;
  }

  .popUp1 h3 {
    text-align: center;
    color: white;

  }
.popUp1 form {
    margin-left: 10%;
  }

  .popUp1 form p {
    color: white;
  
  }
  .btn{ 
    background-color: #F8CE03;
  }
  .token{
        width: 100%;
    display: flex;
    justify-content: flex-end;
    font-size: 2em;
    padding: 0 20px;
    cursor: pointer;
  }
    .send{ 
        font-weight: bold;
    }

@media screen and (max-width: 768px) {

    .sous-nav{
        display: none;
    }
    .nav-bar{
        display: none;
    }
    .logo{
        position: absolute;
        right: 5%;
        top:15px;
    }
}

@media screen and (max-width: 576px) {
    .popUp1{
       width: 90%;
        margin-left: 5%;
    }
    .navbar .menu-items {
    display: flex;
}

.navbar .nav-container li {
    list-style: none;
}

.navbar .nav-container a {
    text-decoration: none;
    /* color: #0e2431; */
    font-weight: 500;
    font-size: 1.2rem;
    padding: 0.7rem;
    color: black;
    font-weight: bolder;
    font-size: 1.5rem;
}
.navbar .nav-container a:hover {
    color: $hover;   
}

.nav-container {
    display: block;
    position: relative;
    height: 60px;
}

.nav-container .checkbox {
    position: absolute;
    display: block;
    height: 32px;
    width: 32px;
    top: 20px;
    left: 20px;
    z-index: 5;
    opacity: 0;
    cursor: pointer;
}

.nav-container .hamburger-lines {
    display: block;
    height: 26px;
    width: 32px;
    position: absolute;
    top: 17px;
    left: 20px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.nav-container .hamburger-lines .line {
    display: block;
    height: 4px;
    width: 100%;
    border-radius: 10px;
    background: $hover;
}

.nav-container .hamburger-lines .line1 {
    transform-origin: 0% 0%;
    transition: transform 0.4s ease-in-out;
}

.nav-container .hamburger-lines .line2 {
    transition: transform 0.2s ease-in-out;
}

.nav-container .hamburger-lines .line3 {
    transform-origin: 0% 100%;
    transition: transform 0.4s ease-in-out;
}

.navbar .menu-items {
        padding-top: 20px;
    background-color: #ffffff;
    /* height: 83vh; */
    width: 103vw;
    transform: translate(-150%);
    display: flex;
    flex-direction: column;
    margin-left: -40px;
    padding-left: 50px;
    transition: transform 0.5s ease-in-out;
    text-align: center;
    z-index: 1;
    position: absolute;
   
    height: auto;
}

.navbar .menu-items li {
    font-size: 2.5rem;
    font-weight: bold;
}

.nav-container input[type="checkbox"]:checked ~ .menu-items {
    transform: translateX(0);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
    transform: rotate(45deg);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
    transform: scaleY(0);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
    transform: rotate(-45deg);
}

.nav-container input[type="checkbox"]:checked ~ .logo {
    display: none;
}
.navbar {
    display: block;
}


   
    
}


</style>
