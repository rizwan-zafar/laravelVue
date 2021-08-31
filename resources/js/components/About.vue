<template>
    <div>
<section class="wrapper-section-about" id="about">
   
<div class="container">
  <div class="row">
    <div class="col-sm">
      <img class="img-fluid"  :src="baseURL+'shirt.png'">
    </div>
     
    <div class="col-sm ">
    <h1 class="setabout">ABOUT ME</h1>
    <p>I’m a FullStack Web Developer. I have a Passion for Creating Clean, Beautiful, Interactive, Minimalistic, Responsive and User Friendly Websites,Scalable and Functional Code.</p>
     <div>
          <ul>
          <li class="first">Name:</li><li>Rizwan Zafar</li>
          </ul>

           <ul>
          <li class="first">DOB</li><li>28-May-1997</li>
          </ul>

           <ul>
          <li class="first">Address:</li><li>Lahore, Pakistan</li>
          </ul>

           <ul>
          <li class="first">Email:</li><li>rizwanzafar4323@gmail.com</li>
          </ul>

           <ul>
          <li class="first">WhatsApp:</li><li>+923454671224</li>
          </ul>
          <br>
          <a :href="baseURL+'R_I_Z_W_A_N.pdf'" download>
             <button type="button" class="btn btn-primary btn-lg"><span>Download</span></button>
          </a>
     </div>
   
    </div>
  </div>
</div>
    </section>
    </div>
</template>
<script>
export default {
    
    
    }
</script>
<style scoped>
.wrapper-section-about{
       padding-top:30px;
      width:100%;
      height: auto; 
      background-image: url("./backimages/aboutback.png");
                
      background-repeat: no-repeat;
      background-size: 100% 100% }
      h1{
        margin-top: 85px;
        margin-left:30px;
        font-weight:bolder;
}
 p{
   margin-left:30px;
   color: #9a9a9a;
}
 
 ul{
    display:flex;
    justify-content:space-between;
 }
 ul li{
list-style: none; 
   margin:0;
   padding:0;
 }
.first{
  font-weight: bold;
 }
    .img-fluid
    {
          height: 565px;
    border-left: 10px solid rgb(199, 217, 244);
    border-top: 10px solid rgb(199, 217, 244);
    border-right: 10px solid rgb(199, 217, 244);
    border-radius: 20px;
    }
       .btn{
          margin-left:30px;
    background: #90acd1;
    border: none;
    color: #fff;
    border-radius:24px;
    box-shadow: 2px 4px 6px #6d6a6a;
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

  @media screen and (max-width: 580px) {
    .wrapper-section-about{
      padding-top:0px;
    }
    .setabout{
      margin-top: 0px;
    }
   

  img
  {
    display:none;
  }
}

h1{
        animation: changeFont 4s ease-in 3s infinite alternate;

}
 
    @keyframes changeFont{
  0%{
        opacity: 1;
  }
  50%{
        opacity: 0.7;
  }
  100%{
  opacity: 0.5;
  
  }
}
</style>