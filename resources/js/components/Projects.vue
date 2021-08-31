<template>
 
    <div class="wrapper-section" id="project">
        <section class="start "><br>
          <div class="text-center">
            <h3 class="title">Projects</h3>
          </div>
          <div class="container">
  <div class="row">

    <div class="col-sm" >
    <span class="badge bg-primary">Laravel + BootStrap</span>
     <div class="card text-white  mb-3" style="">
    <a href="https://www.moazarah.com/en"> <img :src="baseURL+'moazarah.png'"  class="img-fluid" alt="..."></a>
    </div>
    </div>


    <div class="col-sm" >
    <span class="badge bg-primary">Laravel + BootStrap</span>
     <div class="card text-white mb-3" style="">
     <a href="http://test.coffeena.bh/login"><img :src="baseURL+'coffeena.png'"  class="img-fluid" alt="..."></a>
    </div>
    </div>
  </div>

<div class="row">
    <div class="col-sm" >
    <span class="badge bg-primary">Laravel + BootStrap</span>
     <div class="card text-white   mb-3" style="">
     <a href="https://natworkout.com/NATWORKOUT/public/login"><img :src="baseURL+'nat.png'"  class="img-fluid" alt="..."></a>
    </div>
    </div>

    <div class="col-sm" >
       <span class="badge bg-primary">Laravel + Vue</span>
      <div class="card text-white  mb-3" style="">
     <img :src="baseURL+'port.png'"  class="img-fluid" alt="...">
    </div>
    </div>

  </div>



</div>
 
        </section>
 
    </div>
</template>
<script>
export default {
     
    
        mounted() {
            console.log('Project Component mounted.')
        },

     


}
</script>
<style   scoped>
@media screen and (max-width: 580px) {
  
     section div h3 .title{
          color: #dc3545!important;
           padding-top:12px;
        }
        hide_exp_image{
          display:none;
        }
        .vue_width{
    width:100%;
    }
     
}
.wrapper-section{
      width:100%;
                height: auto; 
 
                background-image: url("./backimages/projectBack.png");

            background-repeat: no-repeat;
            background-size: 100% 100%; }
 
  section div h3 .title {
          color: #dc3545!important;
          font-size: 53px;
        }
    .badge{
      padding: 6px 6px;
    }
    .card{
      margin-top:10px;
      box-shadow: 1px 1px 10px #778698;
    border-radius: 10px;
    background:#fff;
    }
    .vue_width{
    width:31%;
    }
        
        
</style>

 
