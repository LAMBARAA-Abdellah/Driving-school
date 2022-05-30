<template>
    <!-- <Hello msg="Students" /> -->
    <Add msg="Personnel"/>
    <form action="">
    <div class="content">
    
        
          <div class="profil-img">
                <img id="blah" src="" alt="">

                <input id="img" type="file" name="" @change="displayImg">

            </div>
            <div class="form">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="div-bot">
                     <div class="form-group">
                    <label for="">Date de naissance</label>
                    <input type="date" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Genre</label>
                    <select name="" id="" class="form-control">
                        <option value="">Homme</option>
                        <option value="">Femme</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="">profession</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                 
                </div>
               
        <div />
 </div>
 

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
    padding: 40px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    height: auto;


    .profil-img {
        width: 200px;
        height: 200px;
        margin-top: 100px;

        img {
            background-image: url("@/assets/images/profil2.png");
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
