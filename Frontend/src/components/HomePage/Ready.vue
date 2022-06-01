<template>



    <div class="popUp1" id="addC">
        <!-- <img @click="hideC()" class="x" src="" alt="x" > -->


        <span class="token" @click="hideC()" aria-hidden="true">&times;</span>
        <h4 class="send">Send your message</h4>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <!-- <label for="recipient-name" class="col-form-label">Full name</label> -->
                    <input type="text" class="form-control" id="recipient-name" placeholder="Full name...">
                </div>
                <div class="form-group">
                    <!-- <label for="recipient-name" class="col-form-label">Phone</label> -->
                    <input type="text" class="form-control" id="recipient-name" placeholder="Phone...">
                </div>
                <div class="form-group">
                    <!-- <label for="recipient-name" class="col-form-label">Email</label> -->
                    <input type="text" class="form-control" id="recipient-name" placeholder="Email adresse...">
                </div>
                <div class="form-group">
                    <!-- <label for="message-text" class="col-form-label">Message:</label> -->
                    <textarea class="form-control" id="message-text" placeholder="Your essage..."></textarea>
                </div>
                <input class="btn " type="submit" value="Envoyer">
            </form>

        </div>

    </div>



    <div class="Ready">
        <div>
            <img src="../../assets/images/21.png" alt="">

        </div>
        <div class="para">
            <h1>
                Are You Ready?
            </h1>
            <p>

                Since 1986, throughout the area, School of Driving has earned
                a reputation for responsible and caring driving instruction. Throughout USA,
                Europe and others, wherever you live, with our professional and friendly local driving
                instructors, you’ll enjoy a relaxed, positive and encouraging environment as you start
                your driving lessons and learn to drive.
            </p>
            <div class="A1">
                <i class="fas fa-phone-alt"></i>
                <p>We know all of the different test routes</p>

            </div>
            <div class="A1">
                <i class="fas fa-phone-alt"></i>
                <p>We know all of the different test routes</p>

            </div>
            <div class="A1">
                <i class="fas fa-phone-alt"></i>
                <p>We know all of the different test routes</p>

            </div>

            <button @click="client()">
                Order now
            </button>
        </div>




    </div>
    <div class="us">
        <div class="all">
            <div class="us1">
                <h2>Schedule <span>Your Driving Lessons</span> with Us!</h2>
                <p>Book our taster lesson and meet your personal driving instructor</p>
                <h1>+212-123-4567</h1>
            </div>
            <div class="us2">
                <img src="../../assets/images/Attention.png" alt="">
            </div>
        </div>


    </div>




</template>
<script>



export default {
    name: 'Ready',
    props: {
        msg: String
    },
    methods: {
        client() {
            document.getElementById("addC").classList.toggle("show");
        },
        hideC() {
            document.getElementById("addC").classList.remove("show");

        }
    }
}
</script>

<style lang="scss" scoped>
$color: #383838;
$hover:#F8CE03;

@mixin flex($direction:row) {
    display: flex;
    flex-direction: $direction;
    justify-content: space-between;
    align-items: center;
    // align-items: baseline;
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


    

.Ready {
    @include flex();
    align-items: flex-start;

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

    button {
        padding: 10px 30px;
        background-color: $color;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: $hover;
        color: black;
        border: none;
    }

}

.us {
    display: flex;
    justify-content: flex-end;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url(../../assets/images/2.png);
}

.all {
    @include flex();
    justify-content: space-evenly;
    font-weight: bold;
    color: white;
    font-size: 14px;
    padding: 6px 150px;
    width: 90%;

    h2 {
        font-size: 30px;
        color: white;
        text-align: center;
    }

    span {

        font-size: 30px;
        color: $hover;
        text-align: center;
    }

    p {
        font-size: 20px;
        color: white;
        text-align: center;

    }

    h1 {
        font-size: 40px;
        color: $hover;

    }

}

h1 {
    font-size: 30px;
    font-weight: bold;
    color: #383838;
}

@media screen and (max-width: 576px) {
    .Ready {
        flex-direction: column-reverse;

        .para {
            padding: 10px;
        }

        img {
            width: 100vw;
        }
    }

    .all {
        flex-direction: column;
        padding: 20px 0;
        width: 100%;

        .us2 {
            img {
                width: 180px;
                height: 160px;

            }
        }
    }



}
</style>

