<template>
  <div>
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
      <!-- linkedin logo -->
      <div class=" flex w-96 ">

      </div>

      <!-- Layout  -->
      <div class="bg-white w-96 shadow-xl rounded p-5 card-login">
        <img class="" src="@/assets/images/Driving1.png" alt="">
        <form @submit.prevent="check" class="space-y-5 mt-5">
          <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="E-amai ou Téléohone"
            v-model="login.email" />
          <input type="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Mot de passe"
            v-model="login.pass" />
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
import router from '@/router';
export default {
  name: 'Login',
  data() {
    return {
      login: {
        email: '',
        pass: ''
      }
    }
  },
  methods: {
    check() {
      fetch('http://localhost/Statique/Backend/login/CheckLogin', {
        method: 'POST',
        body: JSON.stringify(this.login)
      }).then((res) => {
        console.log(res);
        if (res.status == 200) {
          res.json().then((out) => {
            let data = out.data;

            console.log(out);
            if (data) {
              console.log(data);
              console.log("hello");
              if (data.row["id_Admin"]) {

                console.log("hello Admin");
                console.log(data.role);
                this.$cookies.set("id", data.row["id_Admin"]);
                this.$cookies.set("name", data.row["nom_admin"] + data.row["prenom_admin"]);
                // this.$cookies.set(`name ${data.row["nom_admin"]}  ${data.row["prenom_admin"]}`);

                this.$cookies.set("idadmin", data.row["id_Admin"]);
                this.$cookies.set("idadmin", data.row["id_Admin"]);
                this.$cookies.set("idadmin", data.row["id_Admin"]);
                 this.$cookies.set("role", data["role"]);
                 
                this.$cookies.get("idadmin")
                router.push('/Dashboard');
              }
              else if (data.row["id_utilisateur"]) {
                console.log("hello Utilisateur");
                console.log(data.role);

                this.$cookies.set("id", data.row["id_utilisateur"]);
                this.$cookies.set("role", data["role"]);
                this.$cookies.get("role")
                router.push('/Dashboard');
              } 
              } else {
              alert("rak ghalet");
            }
          });
        }
      });

    },



  }


}
</script>
<style scoped lang="scss">
@tailwind base;
@tailwind components;
@tailwind utilities;
.card-login {
  display: flex;
  flex-direction: column;
  align-items: center;
}

button {
  background-color: #F8CE03 !important;
}
</style>