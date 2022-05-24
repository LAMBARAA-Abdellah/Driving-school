<template>
    <div class="hello">
        <div>
            <h1>Ajouter un {{msg}}</h1>
        </div>
    </div>

</template>
<script>


export default {
    name: 'add',
    props: {
        msg: String,
    },

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
h1{
    font-size: 30px;
    font-weight: bold;
    color: #383838;
}
</style>