<template>



    <Hello/>
    <hr style=" border-top: 6px solid rgba(0,0,0,.1) !important">
    <!-- <div>

        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lorem</th>
                    <th scope="col">Ipsum</th>
                    <th scope="col">Dolor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Sit</td>
                    <td>Amet</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Adipisicing</td>
                    <td>Elit</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Hic</td>
                    <td>Fugiat</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> -->
    <div class="content-card">
 <div class="card">
 <div class="profil-img">
     <img src="@/assets/images/IMG_1461.jpg" alt="John" style="width:100%">
 </div>
 
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div>
    <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  
  <p><button>Contact</button></p>
</div>


<div class="card">
 <div class="profil-img">
     <img src="@/assets/images/11.jpeg" alt="John" style="width:100%">
 </div>
 
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div>
    <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  
  <p><button>Contact</button></p>
</div>


<div class="card">
 <div class="profil-img">
     <img src="@/assets/images/IMG_1462.jpg" alt="John" style="width:100%">
 </div>
 
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div>
    <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  
  <p><button>Contact</button></p>
</div>

<div class="card">
 <div class="profil-img">
     <img src="@/assets/images/IMG_1462.jpg" alt="John" style="width:100%">
 </div>
 
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div>
    <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  
  <p><button>Contact</button></p>
</div>

<div class="card">
 <div class="profil-img">
     <img src="@/assets/images/IMG_1462.jpg" alt="John" style="width:100%">
 </div>
 
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div>
    <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  
  <p><button>Contact</button></p>
</div>
    </div>
</template>

<script>
import Hello from './Hello.vue';



export default {
    name: 'Monitor',
    components: {
    Hello
},
    props: {
        msg: String
    }
}
</script>
<style scoped lang="scss" >
$color-sousnavbar: #383838;
$hover:#F8CE03;

@mixin flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: baseline;
}

.content-card{
    display: flex;
    flex-wrap:wrap;
}
.profil-img{
    width: 300px;
    height: 300px;
    img{
        display: block;
  width: 100%;
  height: 100%;
  object-position: bottom;
  position: center;
    
    }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  margin-bottom: 20px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
  padding: 10px;
}

button:hover {
  opacity: 0.7;
}
a:hover{
    color: $hover;
}
p{
    margin: 0;
}

</style>
