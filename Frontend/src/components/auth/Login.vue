<template>  
    <div>
 <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
  <!-- linkedin logo -->
 <div class=" flex w-96 ">

 </div>

  <!-- Layout  -->
  <div class="bg-white w-96 shadow-xl rounded p-5 card-login">
   <img class="" src="@/assets/images/Driving1.png" alt="">
    <form class="space-y-5 mt-5">
      <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="E-amai ou Téléohone" />
    <input type="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Mot de passe" />
      <div class="">
<a href="#!" class="font-medium text-gray-700 hover:bg-gray-300 rounded-full p-2">Mot de passe oublié ?</a>
      </div>

      <button class="text-center w-full bg-blue-700 rounded-full text-white py-3 font-medium">S'identifier</button>

    </form>
  </div>

</div>



    </div>
</template>

<script>
import '@/index.css'
  export default {
    name: 'Login',
    data(){
      return {
        signup: false,
        showModal: false,
      }
    },
   
    
  }
</script>
<style scoped lang="scss">
.card-login {
  display: flex;
    flex-direction: column;
    align-items: center;
  }
  button{
    background-color: #F8CE03 !important;
  }



  


  </style>