<template>
    <div class="candidat">
        <h4>Information:</h4>
        <h4>{{ Student.nom_candidat }} {{ Student.prenom_candidat }}</h4>
    </div>

    <div class="profile">
        <div class="header">
            <figure>
                <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/55758/random-user-31.jpg" alt="" />
            </figure>
            <header>
                <h1>{{Student.nom_candidat}} {{Student.prenom_candidat}}

                </h1>
            </header>
        </div>


        <!-- <div class="toggle">
            <input type="checkbox" class="view_details" id="view_details">
            <label for="view_details" title="tap here to view full profile">☰</label>
        </div> -->
        <main>
            <dl>
                <dt>Full name</dt>
                <dd>{{Student.nom_candidat}} {{Student.prenom_candidat}}</dd>
                <dt>Date of birth</dt>
                <dd>{{Student.datNaissance}}</dd>
                <dt>Adresse</dt>
                <dd>{{Student.adresse}}</dd>
                <dt>Telephone</dt>
                <dd>{{Student.tel}}</dd>
                <dt>Loves</dt>
                <dd>Skydiving, Tennis, Romantic dinners</dd>
                <dt>Hates</dt>
                <dd>Taxes, bosses instead of leaders</dd>
                <dt>Social</dt>
                <dd>
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                </dd>
            </dl>
        </main>

    </div> <!-- end profile -->

    <!-- <div class="content">
        <div class="profil-img">
            <img :src="'@/../public/assets/images/' + Student.photo" alt="jhj">
        </div>
        <h3>Lambaraa Abdellah</h3>
        <div class="info">

            <div class="sous-info">
                <div class="data">
                    <h5>Nom:</h5>
                    <h4>{{ Student.nom_candidat }}</h4>
                </div>
                <div class="data">
                    <h5>Prenom:</h5>
                    <h4>{{ Student.prenom_candidat }}</h4>
                </div>

            </div>
            <div class="sous-info">
                <div class="data">
                    <h5>cin:</h5>
                    <h4>{{ Student.cin }}</h4>
                </div>
                <div class="data">
                    <h5>telephone:</h5>
                    <h4>{{ Student.tel }}</h4>
                </div>

            </div>

            <div class="sous-info">
                <div class="data">
                    <h5>Email:</h5>
                    <h4>{{ Student.email }}</h4>
                </div>
                <div class="data">
                    <h5>Adresse:</h5>
                    <h4>{{ Student.adresse }}</h4>
                </div>

            </div>

            <div class="sous-info">
                <div class="data">
                    <h5>datNaissance:</h5>
                    <h4>Lambaraa</h4>
                </div>
                <div class="data">
                    <h5>sexe:</h5>
                    <h4>Lambaraa</h4>
                </div>

            </div>
            <div class="sous-info">
                <div class="data">
                    <h5>total:</h5>
                    <h4>Lambaraa</h4>
                </div>
                <div class="data">
                    <h5>avance:</h5>
                    <h4>Lambaraa</h4>
                </div>

            </div>






        </div>



    </div> -->




</template>

<script>


import Hello from './Hello.vue';



export default {
    name: 'Monitor',
    components: {
        Hello
    },
    data() {
        return {
            Student: {
                nom_candidat: "",
                prenom_candidat: "",
                cin: "",
                tel: "",
                email: "",
                photo: "",
                adresse: "",
                datNaissance: "",
                sexe: "",
                permis: "",
                total: "",
                avance: "",
                id_utilisateur: "1"
            },

        }

    },
    methods: {
        showAlert() {
            swal({
                icon: 'success',
                title: 'Your Appointment has been created',
                confirmButtonText: 'Continue',
            }).then((result) => {
                if (result) {
                    this.showPopup = false
                    // window.location = "/Students"
                    this.$router.push('/Students')
                }
            })
        },
        detail() {
            fetch(`http://localhost/Statique/Backend/student/getStudent?id=${this.$route.params.id}`).then(res => res.json()).then(Student => {
                this.Student = Student;
            })
        },


    },
    mounted() {
        console.log('Component mounted.');
        console.log(this.$route.params);
        this.detail();

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

    .header {
        width: 80%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    figure {
        margin: 0;

        img {
            max-width: $profile-avatar-size;
            max-height: $profile-avatar-size;
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
