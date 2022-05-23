<template>
    <div class="hello">
        <h1>👋 Hello <span class="sd">D</span>riving <span class="sd">S</span>chool!</h1>


        <button class="add">
            Ajouter
        </button>
    </div>

</template>
<script>
export default {
    name: 'Hello',
    data() {
        return {

        }
    },


}


</script>
<style lang="scss" scoped>
$color-sousnavbar: #383838;
$hover:#F8CE03;
.add {
    width: 120px;
    height: 40px;
    border: none;
    background-color: $color-sousnavbar;
    color: #fff;
    font-weight: bold;
    border-radius: 10px;
}

.add:hover {
    background-color: $hover;
    color: black;
    border: none;
}
</style>