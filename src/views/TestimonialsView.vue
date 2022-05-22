 <template>
    <Navbar/>
    <Testimonials/>
    <Footer/>
</template>
<script>

import Testimonials from '@/components/TestimonialsPage/Testimonials.vue'
import Navbar from '@/components/HomePage/Navbar.vue'
import Footer from '@/components/HomePage/footer.vue'
export default {
  name: 'testimonials',
  components: {
   
    Testimonials,
    Navbar,
    Footer
},

}

</script>

<style lang="scss" scoped>



</style>
