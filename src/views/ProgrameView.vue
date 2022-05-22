 <template>

    <!-- <button @click="tester">click me</button> -->
    <Navbar/>
    <Programe />
    <Footer/>


</template>
<script>
import Programe from '@/components/ProgramePage/Programe.vue'
import { computed } from "vue";
import Navbar from '@/components/HomePage/Navbar.vue';
import Footer from '@/components/HomePage/footer.vue';

export default {
    name: 'ContactPage',
    components: {
    Programe,
    Navbar,
    Footer,

},
    methods: {
        tester() {
            console.log("testerrr");
            this.test = Math.random().toString(36)
        }
    },
    provide() {
        return {
            test: computed(() => this.test)
        }
    },
    data() {
        return {
            test: "tester"
        }
    }

}

</script>

<style lang="scss" scoped>
</style>
