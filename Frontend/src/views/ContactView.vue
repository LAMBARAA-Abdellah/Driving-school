 <template>
    <Navbar/>
    <Contact/>
    <Footer/>
  


</template>
<script>
import Contact from '@/components/ContactPage/Contact.vue'
import Navbar from '@/components/HomePage/Navbar.vue'
import Footer from '@/components/HomePage/footer.vue'
export default {
  name: 'ContactPage',
  components: {
    Contact,
    Navbar,
    Footer,
}
}
</script>

<style lang="scss" scoped>


</style>
