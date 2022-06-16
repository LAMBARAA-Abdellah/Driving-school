<template>
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">
    <h1>Contacts</h1>
    <div class="content">

        <div class="form">
            <h1>Get in Touch</h1>
            <p>If you want to ask a question send a message or submit a testimonial, please use the online form below.
            </p>
            <form @submit.prevent>
                <div class="form-group">
                    <input type="text" name="name" id="" placeholder="Your name" v-model="MessageForm.name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="" placeholder="Email" v-model="MessageForm.email">
                </div>
                <div class="form-group">
                    <input type="tel" name="tel" id="" cols="30" rows="10" placeholder="Phone"
                        v-model="MessageForm.phone">
                </div>
                <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="10" placeholder=" Message"
                        v-model="MessageForm.message"></textarea>
                </div>

                <div class="form-group">
                    <input @click="AddMessage()" class="btn " type="submit" value="Send Message">
                </div>

            </form>

        </div>
        <div class="text">
            <h1>Our Office</h1>
            <div class="adr">
                <div>
                    <img src="@/assets/images/adr.png" alt="">
                    <p> <b>Adresse</b> </p>
                </div>
                <div class="body">
                    <p>If you want to ask a question send a message or submit a testimonial, please use the online form
                        below.</p>
                </div>
            </div>
            <div class="tel">
                <div>
                    <img src="@/assets/images/tel.png" alt="">
                    <p><b>PHONE 24/7 </b></p>
                </div>
                <div class="body">
                    <p> +212 652086766, Fax: 718-724-3312</p>
                </div>

            </div>
            <div class="time">

                <div>
                    <img src="@/assets/images/time.png" alt="">
                    <p> <b>OPERATING HOURS</b> </p>

                </div>
                <div class="body">
                    <p>
                        Mon-Fri: 9:00 am – 5:00 pm <br> Sat-Sun: 11:00 am – 16:00 pm
                    </p>
                </div>
            </div>


        </div>

    </div>

</template>

<script>
import router from '@/router';




export default {
    name: 'navbar',
    props: {
        msg: String
    },
    data() {
        return {
            MessageForm: {
                name: '',
                email: '',
                phone: '',
                message: ''
            }
        }
    },
    methods: {
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
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover: #F8CE03;



@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}

* {
    color: black;
}

h4 {
    border-top: 6px solid rgba(0, 0, 0, .1) !important;
}

h1 {
    font-size: 30px;
    font-weight: bold;
    color: #383838;
}

.content {
    @include flex;
    margin: 0 50px;
    text-align: left;

    .form {
        width: 45%;

        .form-group {

            input,
            textarea {
                width: 100%;

                border: 1px solid #cfcfcf;
                border-radius: 5px;
                padding: 10px;
                margin-bottom: 10px;
                background-color: #fafafa;
                padding-left: 15px;
            }

            ;

            input {
                height: 40px;
            }

            textarea {
                height: 220px;
            }

            ;

            .btn {
                margin-left: 20px;
                width: auto;
                height: 40px;
                border: 1px solid #383838;
                border-radius: 5px;
                padding: 10px;
                margin-bottom: 10px;
                background-color: #383838;
                color: #fff;
                font-weight: bold;
                font-size: 14px;
                cursor: pointer;
            }

        }
    }

    .text {
        width: 45%;

        h1 {
            margin-bottom: 50px;
        }

        .tel,
        .adr,
        .time {
            margin-bottom: 30px;

            div {
                display: flex;
                align-items: flex-end;

                b {
                    margin-left: 20px;
                }
            }

            .body {
                margin-left: 70px;
            }
        }

    }

}

@media screen and(max-width: 576px) {
    .content {
        flex-direction: column;
        margin: 0 20px;

        .form,
        .text {
            width: auto;
        }
    }
}
</style>
