<template>
    <div class="candidat">
        <h4>Information:</h4>
        <h4> {{ Monitor.nom_monitor }} {{ Monitor.nom_monitor }}</h4>
    </div>

    <div class="profile">
    <p class="close" @click="retour()">&times;</p>
        <div class="header">
            <figure>
                <img :src="'/assets/images/' + Monitor.photo" alt="" />
            </figure>
            <header>
                <h1>{{ Monitor.nom_monitor }} {{ Monitor.prenom_monitor }}
                </h1>
            </header>
        </div>
        <main>
            <dl>
                <dt>Full name</dt>
                <dd>{{ Monitor.nom_monitor }} {{ Monitor.nom_monitor }}</dd>
                <dt>Date of birth</dt>
                <dd>{{ Monitor.datNaissance }}</dd>
                <dt>Adresse</dt>
                <dd>{{ Monitor.adresse }}</dd>
                <dt>Cin</dt>
                <dd>{{ Monitor.cin }}</dd>
                <dt>Telephone</dt>
                <dd>{{ Monitor.tel }}</dd>
                <dt>email</dt>
                <dd>{{ Monitor.email }}</dd>
                
                <dt>sexe</dt>
                <dd>{{ Monitor.sexe }}</dd>
                
                
                <dd>
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </dd>
            </dl>
        </main>
        <div class="bttn">
            <div>
                <submit class="btn btn-warning">AddTranche</submit>
            </div>

            <div>
                <router-link :to="'/UpdateMonitor/' + Monitor.id_Monitor">
                    <submit class="btn btn-primary">Modifier</submit>
                </router-link>

                <submit @click="deleteMonitor(Monitor.id_Monitor)" class="btn btn-danger">Suprimer</submit>
            </div>
        </div>


    </div> 



</template>

<script>


import Hello from './Hello.vue';
import swal from "sweetalert";



export default {
    name: 'Monitor',
    components: {
        Hello
    },
    data() {
        return {
             Monitor:{
               id_Monitor:"",
               nom_monitor:"",
               prenom_monitor:"",
               tel:"",
               email:"",
               cin:"",
               adresse:"",
               datNaissance:"",
               photo:"",
               sexe:"",
               id_utilisateur:""
           },


        }
    },
    methods: {
        retour(){
            this.$router.push('/Monitors')
        },
        showAlert() {
            swal({
                icon: 'success',
                title: 'Your Appointment has been created',
                confirmButtonText: 'Continue',
            }).then((result) => {
                if (result) {
                    this.showPopup = false
                    // window.location = "/Monitors"
                    this.$router.push('/Monitors')
                }
            })
        },
        detail() {
            fetch(`http://localhost/Statique/Backend/Monitor/getMonitor?id=${this.$route.params.id}`).then(res => res.json()).then(Monitor => {
                this.Monitor = Monitor;
                
            })
        },

        deleteMonitor(id) {
            fetch(`http://localhost/Statique/Backend/Monitor/deleteMonitor?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.$router.push('/Monitors');
            })
        },

    },
    mounted() {
       fetch(`http://localhost/Statique/Backend/Monitor/getMonitor?id=${this.$route.params.id}`).then(res => res.json()).then(Monitor => {
                this.Monitor = Monitor;
            })

    },

}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;
$base-text-color: #151515;
$base-link-color: #1daaff;
$base-hover-color: darken($base-link-color, 20);

$profile-avatar-size: 150px;

* {
    box-sizing: border-box;
}

html,
body {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    user-select: none;
}

/* 
  some styling for display on codepen,
  you can safely remove this when you
  want to use this module somewhere else 
*/
.codepen {
    margin: 1em auto;

    h1 {
        color: lighten($base-text-color, 20);
        font-weight: 100;
    }

    a {
        color: $base-link-color;

        &:hover {
            color: $base-hover-color;
        }
    }
}

.profile {
    @extend .codepen;
    max-width: 80%;
    border: 1px solid lighten($base-text-color, 80);
    border-radius: 20px;
    padding: 2em;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    align-content: center;
    position: relative;

    .bttn {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin: 20px 0 0 0;

        .btn {
            margin: 0 5px;
        }
    }

    .header {
        width: 80%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    figure {
        margin: 0;

        img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0px 0px 20px rgba($base-text-color, .15);
        }
    }

    // end figure

    header {
        h1 {
            margin: 0;
            padding: 0;
            line-height: 1;
            font-weight: bold;

            small {
                display: block;
                clear: both;
                font-size: 18px;
                opacity: 0.6;

            }
        }
    }

    // end header

    main {
        dl {
            display: block;
            width: 100%;

            dt,
            dd {
                float: left;
                padding: 8px 5px;
                margin: 0;
                border-bottom: 1px solid lighten($base-text-color, 80);

                a {
                    padding-right: 5px;
                }
            }

            dt {
                width: 30%;
                padding-right: 10px;
                font-weight: bold;

                &:after {
                    content: ":"
                }
            }

            dd {
                width: 70%;
            }
        }
    }

    .toggle {
        position: absolute;
        background: #fff;
        top: 30px;
        left: 30px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 24px;
        text-align: center;
        z-index: 20;
        vertical-align: middle;
        box-shadow: 0px 0px 10px rgba($base-text-color, .15);
        cursor: pointer;
        border-radius: 20px;
        user-select: none;
        transition: box-shadow 300ms ease;

        &:hover {
            box-shadow: 0px 0px 10px rgba($base-text-color, .25);
        }

        main {
            font-size: 16px;
        }

        .bttn {
            display: flex;
        }
    }
}

.view_details {
    position: absolute;
    top: -5000px;
    left: -5000px;
}

label {
    display: block;
    cursor: pointer;
}
.close{
    display: flex;
    width: 100%;
    float: right;
    justify-content: flex-end;
    font-size: 2em;
    cursor: pointer;
}
@media screen and (max-width: 520px) {
    .sous-info {
        flex-direction: column;
    }

    .profile {

        width: 100%;

        .header {
            display: flex;
            flex-direction: column;
        }
    }

    .profile img {
        max-width: 100%;
        height: auto;
    }

    .profile main dl,
    .profile main dl dt,
    .profile main dl dd {
        display: block;
        width: 100%;
        float: none;
    }

    .profile main dl dt {
        border-bottom: none;
    }

    .profile main dl dd {
        margin-bottom: 10px;
    }

    .profile .toggle {
        top: 15px;
        left: 15px;
    }
}

.candidat {
    display: flex;
    justify-content: center;
    align-items: center;
}

.content {
    color: black;
    display: flex;
    flex-direction: column;
    align-items: center;

    .profil-img {
        width: 200px;
        height: 200px;
        border: solid 1px red;
    }

    .info {
        width: 90%;

        .sous-info {
            margin: 20px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;

            .data {
                display: flex;
                align-items: center;
                width: 200px;
            }
        }
    }
}
</style>
