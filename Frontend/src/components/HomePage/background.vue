<template>
    <div class="backround">
        <div class="bienvenu">
            <h2>{{ event[current].h1 }}</h2>
            <h1> <span>{{ event[current].spam1 }}</span> & <span>{{ event[current].spam2 }}</span> {{ event[current].h2 }}</h1>

        </div>
        <div class="statistique">
            <div class="teacher">
                <div>
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div>
                    <h1>
                        28
                    </h1>
                    <h2>
                        Teachers
                    </h2>
                </div>
            </div>
            <div class="hours">
                 <div>
                    <i class="	far fa-clock"></i>
                </div>
                <div>
                    <h1>
                        1292
                    </h1>
                    <h2>
                        Trining hours
                    </h2>
                </div>
            </div>
            <div class="years">
                 <div>
                    <i class="fas fa-heart"></i>
                </div>
                <div>
                    <h1>
                        5
                    </h1>
                    <h2>
                        working years
                    </h2>
                </div>
            </div>
            <div class="licence">
                  <div>
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div>
                    <h1>
                        28
                    </h1>
                    <h2>
                        Teachers
                    </h2>
                </div>
            </div>
        </div>
      
          


        
    </div>
       <div class="statistique-mobile">
            <div class="teacher">
                <div>
                    <i :class="arr[current].class"></i>
                </div>
                <div>
                    <h1>
                        {{ arr[current].h1 }}
                    </h1>
                    <h2>
                        {{ arr[current].h2 }}
                    </h2>
                </div>
            </div>
           
        </div>
</template>
<script>



export default {
    name: 'background',
    
     data() {
        return {
            // arr: items,
            current: 0,
          
            arr: [
                 {  class: "fas fa-heart", h1: "5",h2:"working years" },
                {  class: "fas fa-chalkboard-teacher", h1: "28",h2:"Teachers" },
                {  class: "far fa-clock", h1: "1292",h2:"Trining hours" },
                {  class: "fas fa-heart", h1: "5",h2:"working years" },
                {  class: "fas fa-chalkboard-teacher", h1: "28",h2:"Teachers" },    

            ],
              event: [
                { h1:"Welcome to the website of the house of culture" ,spam1:"Friendly",spam2:"Patient" ,h2:"Instructors"},
                { h1:"School of Driving has earneda reputation for responsible" ,spam1:"Traffic",spam2:"Ticket" ,h2:"Dismissed"},
                { h1:" Auto insurances rates are safe from increases" ,spam1:"Students ",spam2:"Approved" ,h2:"Driving"},

            ]
           



        }
    },
    props: {
        msg: String
    },
     methods: {
        next() {
            this.current = (this.current + 1) % this.arr.length
        },
         suivant() {
            this.current = (this.current + 1) % this.arr.length
        },
    },
     mounted() {
        setInterval(() => {
            this.next()
        }, 3000),
        setInterval(() => {
            this.suivant()
        }, 3000)
    },
}
</script>

<style lang="scss">
$color: #383838;
$hover:#F8CE03;

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}
@mixin flexicon {
    display: flex;
    justify-content: space-between;
    align-items: center;
   
}

* {
    margin: 0;
    padding: 0;
}

.backround {
    position: relative;
    color: white;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url(../../assets/images/16.jpeg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;

}

.bienvenu {
    padding-top: 200px;

    // margin-left:100px;
    h2 {
        color: white;
        letter-spacing: 2px;
        font-weight: 700;
        padding: 30px;
    }

    h1 {
        color: white;
        font-size: 80px;
        font-weight: bold;
    }

    span {
        color: $hover;

    }

}

.statistique {
    width: 100%;
    position: absolute;
    bottom: 0;
    background-image: url();
    background-color: $color;
    @include flex;
    padding:0 60px;

    .teacher,
    .hours,
    .years,
    .licence {
        @include flexicon;
        width: 350px;
        height: 130px;
        padding: 0 30px;
        margin: 0 30px;
        transform: skew(57.94turn, 180deg);
       
      
    }
    .teacher,.years {
        background-image:  url(../../assets/images/3.png);
         background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
       .hours,.licence {
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5) 20%), url(../../assets/images/19.jpg);
         background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
    i{
    color: $hover;
    }

    h1 {
        font-size: 50px;
        font-weight: bold;
    }

    h2 {
        font-size: 22px;
        font-weight: bold;
    }

    i {
        font-size: 50px;
    }
}
.statistique-mobile{ 
    display: none;
}
@media screen and (max-width: 576px) {
    .backround{ 
        height: 50vh !important;
        }
 .statistique{
    display: none;
    }
    
         .bienvenu {
        padding-top: 100px;
        h1{ 
            font-size: 40px;
        }
    
    }
    .statistique-mobile{ 
        display: block;
    display: flex;
    align-items: center;
    justify-content: space-around;
    color: white;
    background-color: #383838;

    .teacher{ 
        display: flex;
        align-items: center;
        width: 50vw;
        justify-content: space-around;
        
    
        i{
    color: $hover;
    }

    h1 {
        font-size: 50px;
        
    }

    h2 {
        font-size: 22px;
        font-weight: bold;
    }

    i {
        font-size: 50px;
    }
    }
   }
   
   
}
</style>

