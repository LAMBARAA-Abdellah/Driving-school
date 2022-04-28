<template>
 <Navbar />
  <router-view />
</template>







<script>

import Navbar from '@/components/HomePage/Navbar.vue'
import background from '@/components/HomePage/background.vue'

export default {
  name: 'HomePage',
  components: {
    Navbar,
    background
  }
}
</script>




<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

*,
*::after,
*::before {
  margin: 0;
  //box-sizing: border-box;
  padding: 0;
}

nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
