<template>
    <div class="hello">
        <!-- <h1>👋 <span>{{msg}}</span> <span class="sd">D</span>riving <span class="sd">S</span>chool!</h1> -->
        <div class="div-search">
            <div class="input-group">
                <span class="input-group-prepend">
                    <div class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-search"></i>
                    </div>
                </span>
                <input class="form-control py-2 border-left-0 border" type="search" value="..."
                    id="example-search-input" />
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border" type="button">
                        Search
                    </button>
                </span>
            </div>
        </div>
        <router-link :to="link">
            <button class="btn btn-warning">
                Ajouter
            </button>
        </router-link>
    </div>

</template>
<script>


export default {
    name: 'Hello',
    props: {
        msg: String,
        link: String
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