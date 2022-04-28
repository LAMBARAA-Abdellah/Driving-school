 <template>
  <background />
  <Ready/>

</template>
<script>

import Navbar from '@/components/HomePage/Navbar.vue'
import background from '@/components/HomePage/background.vue'
import Ready from '@/components/HomePage/Ready.vue'

export default {
  name: 'HomePage',
  components: {
    Navbar,
    background,
    Ready
  }
}
</script>
