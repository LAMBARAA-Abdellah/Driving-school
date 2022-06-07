<template>
    <div class="candidat">
        <h4>Information:</h4>
        <h4> {{ Voiture.marque }}</h4>
    </div>

    <div class="profile">
        <p class="close" @click="retour()">&times;</p>
        <div class="header">
            <figure>
                <img :src="'/assets/images/' + Voiture.photo" alt="" />
            </figure>
            <header>
                <h1>{{ Voiture.marque }} {{ Voiture.module }}
                </h1>
            </header>
        </div>
        <main>
            <dl>
                <dt>Marque</dt>
                <dd>{{ Voiture.marque }}</dd>
                <dt>matricule</dt>
                <dd> {{ Voiture.matricule }}</dd>
                <dt>model</dt>
                <dd>{{ Voiture.module }}</dd>

            </dl>
        </main>
        <div class="bttn">

            <div>
                <router-link :to="'/UpdateVoiture/' + Voiture.id_voiture">
                    <submit class="btn btn-primary">Modifier</submit>
                </router-link>

                <submit @click="deleteVoiture(Voiture.id_voiture)" class="btn btn-danger">Suprimer</submit>
            </div>
        </div>


    </div>



</template>

<script>


import Hello from './Hello.vue';
import swal from "sweetalert";



export default {
    name: 'detail-Voiture',
    components: {
        Hello
    },
    data() {
        return {
            Voiture: {
                matricule: '',
                marque: '',
                module: '',
                photo: '',
                id_voiture: ''
            },


        }
    },
    methods: {
        retour() {
            this.$router.push('/Cars')
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
                    this.$router.push('/cars')
                }
            })
        },
        detail() {
            fetch(`http://localhost/Statique/Backend/voiture/getVoiture?id=${this.$route.params.id}`).then(res => res.json()).then(Voiture => {
                this.Voiture = Voiture;

            })
        },
        deleteVoiture(id) {
            fetch(`http://localhost/Statique/Backend/voiture/deleteVoiture?id=${id}`,
               {
               method: "GET"
                }
            ).then(() => {
                this.$router.push('/cars');
            })
        },
        deleteStudent(id) {
            fetch(`http://localhost/Statique/Backend/student/deleteStudent?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.$router.push('/Students');
            })
        },
    },
    mounted() {
        console.log(this.$route.params);
        this.detail();

    },

}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover: #F8CE03;
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
        justify-content: flex-end;
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
            width: 300px;
            object-fit: cover;
            height: 200px;
            border-radius: 0%;
            padding: 10px;
            box-shadow: 0px 0px 20px rgb(21 21 21 / 15%);
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
        width: 100%;
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
            justify-content: flex-end;
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

.close {
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
