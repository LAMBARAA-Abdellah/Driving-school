<template>
    <footer>
    <div class="footer"> 
         <div class="footer-logo">
            <div class="logo">
                <img src="@/../public/assets/images/Driving2.png" alt="">
            </div>
            <p class="para-footer">
                We provide a reputable and profes- sional service that aims to give you the confidence to pass your test
                and drive safely on the roads.
            </p>

        </div>
        <div class="info">
            <h2>Information</h2>
            <div>
                <h4>Faq</h4>
                <h4>Location</h4>
                <h4>Testimonials</h4>
                <h4>Partners</h4>
            </div>
        </div>
        <div class="vl"></div>
        <div class="cust">
            <h2>Cutomer Service</h2>
            <div>
                <h4>Search Terms</h4>
                <h4>Site Map</h4>
                <h4>Privacy</h4>
                <h4>Terms of Use</h4>
                <h4>Contact Us</h4>
            </div>
        </div>
        <div class="media">
            <div class="social">
                <div><i class="fab fa-facebook-f"></i></div>
                <div><i class="fab fa-twitter"></i></div>
                <div><i class="fab fa-instagram"></i></div>
                <div><i class="fab fa-google"></i></div>
            </div>
            <div>
                <img src="@/../public/assets/images/carta.png" alt="">
            </div>
        </div>
    </div>
       
    <h5>© 2017 Safe Drive Driving School.</h5>


  </footer>

</template>

<script>



export default {
    name: 'footer',
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

}

h2 {
    color: #F8CE03;
    font-size: 25px;
    margin-bottom: 40px;
}

h4 {
    font-size: 20px;
}
h5{ 
    margin:auto ;
    color: white;
}
footer{
      background-image: url("@/assets/images/tt-foter-bg.jpg");
     
     
.footer {
    padding: 0 30px 0px 30px;
    font-size: 100%;
     height: 270px;
  
    @include flex;
    color: rgba(189, 187, 187, 0.8);
    text-align: left;
    .footer-logo {
        width: 30%;

        .logo {
            display: flex;
    justify-content: center;
        
        
        img {
            width: 200px;
            margin: 20px ;
        }
        }
        .para-footer {
           margin-top: 20px;
        }

        h5 {
            color: white;
            margin-top: 50px;
        }
    }

    .vl {
        background-color: #a3a3a3;
    height: 200px;
    margin-top: auto;
    border: solid 0.1em #a3a3a3;
    }
    .cust{
        margin-top: 30px;
    }

    .media {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-top: 30px;

        .social {
            display: flex;

            div {
                width: 50px;
                height: 50px;
                margin: 10px;
                transform: rotateY(0deg) rotate(45deg);
                background-color: #F8CE03;
                cursor: pointer;

                .fab {
                    color: black;
                    font-size: 30px;
                    margin: 10px;
                    transform: rotateY(0deg) rotate(-45deg);
                }

            }
            div:hover{
                background-color:white;
                .fab {
                    color: #F8CE03;
                    font-size: 30px;
                    margin: 10px;
                    transform: rotateY(0deg) rotate(-45deg);
                }
            }

        }
    }

 
}
}

@media screen and (max-width: 776px) {
    footer{ 

   
    .footer{ 
        flex-direction: column;
        align-items: center;
        height: auto;
        .footer-logo{ 
            width: 100%;
            align-items: center;
        }

    }
    .vl{ 
        display: none;
    }
    .info,.cust{ 
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .media{ 
        align-items: flex-start;
        margin-right: 20px;
    }
    h5{ 
        padding: 30px 10px;
    }
 }
  }
</style>
