 <template>
 <Navbar/>
  <About />
  <Footer/>





</template>
<script>
import About from '@/components/AboutPage/About.vue'
import Navbar from '@/components/HomePage/Navbar.vue'
import Footer from '@/components/HomePage/footer.vue'
export default {
  name: 'ContactPage',
  components: {
    About,
    Navbar,
    Footer,
}
}
</script>

<style lang="scss" scoped>
</style>
