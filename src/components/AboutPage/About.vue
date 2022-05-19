<template>
        <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">
        <h1>Company Overview</h1>
         <div class="Ready">
        <div>
            <img src="../../assets/images/confident-business-team-with-leader.jpg" alt="">

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
        </div>




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
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;
@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
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

    button:hover {
        background-color: $hover;
        color: black;
        border: none;
    }

}

</style>
