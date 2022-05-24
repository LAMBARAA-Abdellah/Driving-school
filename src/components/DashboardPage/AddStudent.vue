<template>
    <Hello msg="Students" />
    <div class="content">

    <div class="profil-img">
        <img src="@/assets/images/profil2.png" alt="">
 
    <input type="file" name="" id="">
     
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
                <label for="">Telephone</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Adresse</label>
                <input type="text" name="" id="" class="form-control">
            </div>
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
                <label for="">Select categorie permis</label>
                <select name="" id="" class="form-control">
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                    <option value="">D</option>
                    <option value="">E</option>
                    <option value="">F</option>
                </select>

    <div/>
    <div/>
    <div/>
    <div/>

     
    
    
    </div>
<div/>
        </div>

    </div>



                    
</template>

<script>
import Hello from './Hello.vue';


export default {
    name: 'AddStudent',
    name: 'Monitor',
    components: {
        Hello
    

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

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}
input{
    width: 300px;
}
.content{
    margin-top: 100px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 70px;
    padding:0 50px;
    .profil-img{
        width: 200px;
        height: 200px;
        img{
            display: block;
            width: 100%;
        }
        input{
            margin-top: 20px;
      
           
            cursor: pointer;
        }
    }
    .form{
        display: flex;
        flex-wrap:wrap;
        margin-top: 20px;
        justify-content:space-between;
        .form-group{
            margin-top: 40px;
                input{
                   
                }
            
        }
    }
}
</style>
