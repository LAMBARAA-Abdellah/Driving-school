<template>
    
        

</template>
<script>


export default {
    name: 'Hello',
    props: {
        
    },

    data() {
        return {

        }
    },


}


</script>
<style lang="scss" scoped>
$color-sousnavbar: #383838;
$hover: #F8CE03;

.hello {
    display: flex;
    background: white;
    z-index: 999;
    padding: 10px 10px;
    width: 100%;
    top: 0;
    justify-content: space-between;
    align-items: center;

    h1 {
        font-family: ui-sans-serif !important;

    }

    .sd {
        color: #F8CE03;
        font-family: ui-sans-serif !important;


    }

}

@media screen and (max-width: 576px) {
   .hello{ 
           height: 132px;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px 20px;
    align-items: end;
   }
   
}
</style>