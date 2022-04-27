 <template>
  <Navbar />
  <background />

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
