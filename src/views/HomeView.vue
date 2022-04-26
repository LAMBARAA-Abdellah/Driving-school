<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/images/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App" />
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import Navbar from '@/components/HomePage/Navbar.vue'
export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    Navbar
  }
}
</script>
