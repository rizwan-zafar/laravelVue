<template>
    <div>
          
 
  <section id="header">
            <header>
 
<div class="container">
  <div class="row" style="margin-top:60px;">
    <div class="col-sm">
      <div style="height:10px;">
      <h6 class='hey' >HEY! I AM</h6>
      </div>
      <br>
      <h1 class="myname"  >Rizwan Zafar</h1>

      <p style="font-size: 18px;font-weight: bold;">I'am Full Stack Web Developer</p>
      <br><br>
      <p style="color:rgb(165 165 165);">And having handsome experiance in website development and designing.</p>
   <a :href="baseURL+'R_I_Z_W_A_N.pdf'" download>
   <button  type="button" class="btn btn-primary btn-lg"><span>Download</span></button>
   
   </a>
    </div>
    <div id="img" class="col-sm text-center"> 
       <img :src="baseURL+'black1.png'" class="img-fluid">
    </div>
    
  </div>
</div>
                   
                 
     
 
            </header>
             
  </section>
    </div>
</template>
<script>
import anime from 'animejs';
export default {
  
     mounted() {
            console.log('Header Component mounted.')
        },
          methods: {

onScroll()
{
       if(window.pageYOffset>200){
        // if(this.view.topOfPage) this.view.topOfPage = false
          this.scroll=true;
      } else {
        // if(!this.view.topOfPage) this.view.topOfPage = true
        this.scroll=false;
      }
},
  
  }
};
 
</script>
<style scoped>
     
    
 header{
      width:100%;
                height: auto; 
background-image: url("./backimages/portBackHeader.png");
                
            background-repeat: no-repeat;
            background-size: cover}
 .navset{
      
    justify-content: space-around;
 }
 .navbar-nav a{
       margin-right:30px;
 }
 @media screen and (min-width: 580px) {
    
     .hey{
     font-weight: bold;
    padding-top: 130px;
    color: rgb(144, 172, 209);
    font-size: 24px;
    letter-spacing: 2px;
  }
   
 
  /* .myname{
    color:rgb(156, 12, 12);
    font-size: 44px;
    font-weight: bold;
  } */
}
 
  /* font and heading */
  .hey{
        font-weight: bold;
    padding-top: 0px;
    color: rgb(144, 172, 209);
    font-size: 24px;
    letter-spacing: 2px;
      animation: letter 2s ease-in 3s infinite alternate;
  }
  @keyframes letter{
    from{
      font-size: 24px;
    }
    to{
       font-size: 2px;
    }
  }
  .myname{
    color:rgb(156, 12, 12);
    font-size: 44px;
    font-weight: bold;
  }
  .btn{
    background: #90acd1;
    border: none;
    color: #fff;
    border-radius:24px;
    box-shadow: 2px 4px 6px #6d6a6a;
    /* animation: borderer;
    animation-duration: 4s;
    animation-iteration-count: infinite; */
      animation: borderer 4s ease-in 3s infinite alternate;
  }
  @keyframes borderer {
    from{
      border-radius:2px;
    }
    to{
      color: rgb(156, 12, 12);
       
    }
  }
  .btn span{
    padding-left: 22px;
    padding-right: 22px;
  }
</style>
