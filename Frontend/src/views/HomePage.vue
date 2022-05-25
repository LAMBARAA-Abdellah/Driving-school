 <template>
 <Navbar/>
  <background />
  <Ready/>
  <Programes/>
  <US/>
 <Footer/>
  


</template>
<script>

import Navbar from '@/components/HomePage/Navbar.vue'
import background from '@/components/HomePage/background.vue'
import Ready from '@/components/HomePage/Ready.vue'
import Programes from '@/components/HomePage/Programes.vue'
import US from '@/components/HomePage/US.vue'
import Footer from '@/components/HomePage/footer.vue'
export default {
  name: 'HomePage',
  components: {
    Navbar,
    background,
    Ready,
    Programes,
    US,
    Footer

}
}
</script>
