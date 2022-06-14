<template>
    <div class="candidat">
        <h4>Information:</h4>
        <h4>{{ Student.nom_candidat }} {{ Student.prenom_candidat }}</h4>
    </div>
    <div class="vn-orange" style="text-align: center;">
        <a @click='generatePDF' href="#" class="btn-wrap">DOWNLOAD</a>
    </div>

    <div class="profile">
        <p class="close" @click="retour()">&times;</p>
        <div class="header">
            <figure>
                <img :src="'/assets/images/' + Student.photo" alt="" />
            </figure>
            <header>
                <h1>{{ Student.nom_candidat }} {{ Student.prenom_candidat }}
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
                <dd>{{ Student.nom_candidat }} {{ Student.prenom_candidat }}</dd>
                <dt>Date of birth</dt>
                <dd>{{ Student.datNaissance }}</dd>
                <dt>Adresse</dt>
                <dd>{{ Student.adresse }}</dd>
                <dt>Telephone</dt>
                <dd>{{ Student.tel }}</dd>
                <dt>email</dt>
                <dd>{{ Student.email }}</dd>
                <dt>sexe</dt>
                <dd>{{ Student.sexe }}</dd>
                <dt>permis</dt>
                <dd>{{ Student.permis }}</dd>
                <dt>total</dt>
                <dd>{{ Student.Total }} DH</dd>
                <dt>avance</dt>
                <dd>{{ Tranche.avance || 0 }} DH</dd>
                <dt>Status</dt>
                <dd>{{ Student.status }}</dd>

                <dt>Social</dt>
                <dd>
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </dd>
                <dt class="validation">Validation</dt>
                <dd>
                    <i class="valid fas fa-solid fa-check"></i>
                    <i class="invalid fas fa-solid fa-ban"></i>
                </dd>
            </dl>
        </main>
        <div class="bttn">
            <div>

                <submit @click="$router.push('/tranche/' + Student.id_Candidat)" class="btn btn-warning">AddTranche
                </submit>
                <submit @click="archiveStudent(Student.id_Candidat)" class="btn btn-warning">Archiver
                </submit>
            </div>
            <!-- <router-link :to="'/tranche/'+ Student.id_Candidat">
                <submit  class="btn btn-warning">AddTranche</submit>
                </router-link> -->

            <div>
                <router-link :to="'/UpdateStudent/' + Student.id_Candidat">
                    <submit class="btn btn-primary">Modifier</submit>
                </router-link>

                <submit @click="deleteStudent(Student.id_Candidat)" class="btn btn-danger">Suprimer</submit>
            </div>
        </div>


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
import swal from "sweetalert";



export default {
    name: 'Monitor',
    components: {
        Hello
    },
    vuetify: new Vuetify(),
    data() {
        return {
            Tranche: {
                avance: '',
            },


            heading: "Contrat driving school",
            moreText: [
                "This is another few sentences of text to look at it.",
                "Just testing the paragraphs to see how they format.",
                "jsPDF likes arrays for sentences.",
                "Do paragraphs wrap properly?",
                "Yes, they do!",
                "What does it look like?",
                "Not bad at all."
            ],
            description: [
                "What is the purpose of driving? Image result for description driving school The purpose of driving. Driving serves many purposes. At its most fundamental level, driving a motor vehicle is a reliable, efficient and economical mode of transport"
            ],
            logo: [
                "Driving School",
            ]


        }

    },
    methods: {
        generatePDF() {
            const columns = [
                { title: "Title", dataKey: "title" },
                { title: "Body", dataKey: "body" }
            ];
            const doc = new jsPDF({
                orientation: "portrait",
                unit: "in",
                format: "letter"
            });
            // text is placed using x, y coordinates
            doc.setFontSize(16).text(this.heading, 0.5, 1.8);
            // create a line under heading
            doc.setLineWidth(0.01).line(0.5, 2, 8.0, 2);
            // Using autoTable plugin
            doc.autoTable({
                columns,
                body: this.items,
                margin: { left: 0.5, top: 2.25 }
            });
            // Using array of sentences
            doc
                .setFont("helvetica")
                .setFontSize(12)
                .text(this.moreText, 0.5, 6.5, { align: "left", maxWidth: "7.5" });

            // Using array of sentences
            doc
                .setFont("helvetica")
                .setFontSize(12)
                .text(this.description, 0.5, 1, { align: "left", maxWidth: "7.5" });

            // Using array of sentences
            doc
                .setFont("helvetica")
                .setFontSize(20)
                .text(this.logo, 3.5, 0.5, { align: "left", maxWidth: "7.5" });

            // Creating footer and saving file
            doc
                .setFont("times")
                .setFontSize(11)
                .setFontStyle("italic")
                .setTextColor(0, 0, 255)
                .text(
                    "This is a simple footer located .5 inches from page bottom",
                    0.5,
                    doc.internal.pageSize.height - 0.5
                )
                .save(`${this.heading}.pdf`);
        },
        retour() {
            this.$router.push('/Students')
        },
        showAlert() {
            swal({
                icon: 'success',
                title: 'Your Appointment has been created',
                confirmButtonText: 'Continue',
            }).then((result) => {
                if (result) {
                    this.showPopup = false
                    // window.location = "/Students"
                    this.$router.push('/Archieves')
                }
            })
        },
        deleteAlert() {
            swal({
                icon: 'warning',
                title: 'Your Appointment has been deleted',
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
            this.$store.dispatch('fetchStudent', this.$route.params.id)
        },
        GetTranche() {
            fetch(`http://localhost/Statique/Backend/student/getTranche?id=${this.$route.params.id}`).then(res => res.json()).then(avance => {
                this.Tranche = avance;

            })
        },

        // deleteStudent(id) {
        //     swal.fire({
        //         title: 'Are you sure?',
        //         text: "Do you really want to delete this user!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //         }).then((result) => {
        //         if (result.isConfirmed) {
        //             swal.fire(
        //             'Deleted!',
        //             'User has been deleted.',
        //             'success',
        //             fetch(`http://localhost/Statique/Backend/student/deleteStudent?id=${id}`,
        //         {
        //             method: "GET"
        //         }
        //     )   .then(() => {
        //                 this.afficher();

        //             })
        //             )
        //         }
        //         })

        // },

        deleteStudent(id) {
            fetch(`http://localhost/Statique/Backend/student/deleteStudent?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.deleteAlert();
            })
        },
        archiveStudent(id) {
            fetch(`http://localhost/Statique/Backend/student/archiveStudent?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.showAlert();
            })
        },
        valideStudent(id) {
            fetch(`http://localhost/Statique/Backend/student/valideStudent?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.showAlert();
            })
        },

    },
    
    computed: {
        items() {
            return [
                {
                    title: "Nom et prenom",
                    body: this.Student.nom_candidat + " " + this.Student.prenom_candidat
                },
                {
                    title: "Cin",
                    body: this.Student.cin
                },
                {
                    title: "Telephone",
                    body: this.Student.tel
                },
                {
                    title: "Email",
                    body: this.Student.email
                },
                {
                    title: "adresse",
                    body: this.Student.adresse
                },
                {
                    title: "date Naissance",
                    body: this.Student.datNaissance
                },
                {
                    title: "Sexe",
                    body: this.Student.sexe
                },
                {
                    title: "Permis",
                    body: this.Student.permis
                },
                {
                    title: "Total",
                    body: this.Student.Total + " Dh"
                },
                {
                    title: "Avance",
                    body: this.Tranche.avance + " Dh"
                },

            ];
        },
        Student() {
            return this.$store.state.student
        }
    },

    mounted() {
        console.log('Component mounted.');
        console.log(this.$route.params);
        this.detail();
        this.GetTranche();

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

.validation {
    padding: 16px !important;
}

.valid {
    color: green;
    font-size: 38px;
    padding-right: 50px;
    cursor: pointer;

}

.invalid {
    color: red;
    opacity: 0.5;
    font-size: 38px;
    cursor: pointer;
}

.vn-orange a {
    background-color: $hover;
    display: inline-block;
    position: relative;
    padding: 20px 20px 20px 80px;
    color: #fff;
    transition: all 0.4s ease
}

.vn-orange a:before {
    content: "\f019";
    font-family: fontAwesome;
    position: absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    font-size: 28px;
    border-radius: 0 20px 0 0;
    color: #000;
    background-color: #fff;
    opacity: 0.3;
    padding: 20px;
    top: 0;
    left: 0
}

.vn-orange a:hover {
    background: $color-sousnavbar;
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
    width: 80%;
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
        margin-top: -6%;
        width: 80%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    figure {
        margin: 0;

        img {
            object-fit: cover;
            width: 200px;
            height: 200px;
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

@media screen and (max-width: 990px) {
    .sous-info {
        flex-direction: column;
    }

    .profile {

        width: 100%;

        .header {
            display: flex;
            flex-direction: column;

            h1 {
                display: none;
            }
        }

        .bttn {

            height: 100px;
            flex-direction: column-reverse;
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
