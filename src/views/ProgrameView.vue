 <template>

    <button @click="tester">click me</button>
    <Programe />



</template>
<script>
import Programe from '@/components/ProgramePage/Programe.vue'
import { computed } from "vue";

export default {
    name: 'ContactPage',
    components: {
        Programe,

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
