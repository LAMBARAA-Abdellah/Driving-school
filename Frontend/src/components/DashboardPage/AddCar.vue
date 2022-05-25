<template>
    <!-- <Hello msg="Students" /> -->
    <Add msg="Car"/>
    <form action="">
    <div class="content">
    
        
            <div class="profil-img">
                <img src="" alt="">

                <input type="file" name="" id="">

            </div>
            <div class="form">
                <div class="form-group">
                    <label for="">Matricule</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Marque</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Model</label>
                    <!-- <input type="years" name="" id="" class="form-control"> -->
                    <input type="number" min="1900" max="2099" step="1" value="2022" />
                </div>
               
                
            </div>
               
    <div />
 </div>
 

    <div class="w-100">
     <input class=" btn aaa btn-secondary ms-auto" type="button" value="Ajouter">
    </div>
       
   </form>

</template>

<script>
import Hello from './Hello.vue';
import Add from './add.vue';


export default {
    name: 'AddStudent',
    name: 'Monitor',
    components: {
        Hello,
        Add


    },
    data() {
        return {


        }
    },


    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;


input {
    width: 300px;
   
}
select{
    width: 300px;
}
.btn{
    width: 140px;
}
form{
    background-color: #F9F8F8;
}
.aaa{
    margin: 20px;
}
.content {
   display: flex;
    flex-wrap: wrap;
    height: auto;
    flex-direction: column;
    align-items: center;

    .profil-img {
        width: 200px;
        height: 200px;
        margin-top: 100px;

        img {
            background-image: url("@/assets/images/carb.png");
            display: block;
            background-position: center;
            background-size: cover;
        height: 200px;
            width: 100%;
        }

        input {
            margin-top: 20px;


            cursor: pointer;
        }
    }

    .form {
        width: 100%;
        margin-top: 60px;
      display: flex;
      flex-wrap: wrap;
        justify-content: space-around;

        .div-bot{
            display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;

           
        }
    }
}

</style>
