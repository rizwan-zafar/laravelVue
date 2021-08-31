<template>
    <div>
         <section id="hire">
             <div class="container">
                 <div class="text-center ">
                     <h1>HIRE ME</h1>
                     <p class="main">i believe in standing out. i stand out as a web designer and web developer insisting on pushing the boundaries of website performance, and by delivering work of the highest quality on-time and on-budget.</p>
                 </div> 
                 <br><br>
                <div class="row text-center">
                    <div class="col-sm">
                   <span> WhatsApp/Telegram</span><p>+923454671224</p>
                    </div>
                    <div class="col-sm">
                    <span>Email:</span><p>rizwanzafar4323@gmail.com</p>
                    </div>
                    <div class="col-sm">
                    <span>Fiver:</span><p>rizwan_meo</p>
                    </div>
                </div>
                </div>

                <div class="text-center">
                    <!-- Example split danger button -->
 
  
  <button type="button" class="btn custom"  data-bs-toggle="dropdown">Click to Hire</button>
  <ul class="dropdown-menu">

      <li><a class="dropdown-item" href="mailto:rizwanzafar4323@gmail.com?subject=Hiring Rizwan Zafar">Email</a></li>
    <li><a class="dropdown-item" href="https://www.fiverr.com/rizwan_meo">Fiver</a></li>
    <li><a class="dropdown-item" href="https://wa.me/923454671224" target="_blank">WhatsApp</a></li>
    
  </ul>
 </div> 
<br><br>

<div class="social_icon text-center">
<a href="https://www.facebook.com/Programming-Theory-909273265882160/"><i class="fab fa-facebook"></i></a>
<a href="https://www.instagram.com/invites/contact/?i=ob90um9xqk7o&utm_content=f8ssw6x"><i class="fab fa-instagram"></i></a>
<a href="https://www.youtube.com/channel/UCs74zDkqc4Uz8K2K-DmLo-g/videos"><i class="fab fa-youtube"></i></a>
<a href="https://www.linkedin.com/in/rizwan-zafar-0a79aa195"><i class="fab fa-linkedin"></i></a>
</div>
         </section>
</div>
</template>
<style scoped>
section{
    background:#9C0C0C;
}
h1{
  margin-top: 33px;
    font-weight: bolder;
    font-size: 50px;
    color: white;
}
.main{
        padding-top: 11px;
    color: white;
    font-size: 17px;
    margin-bottom: 2rem;
}
.row .col-sm span{
    color :white;
    margin-top: 5px;
    font-weight: bold;
}
.row .col-sm p{
    color: white;
}
.custom{
    background:transparent;
    color: white;
    font-weight: bold;
    font-size: 20px;
    margin-top: 25px;
    border: 2px solid white;
    border-radius: 30px;
    padding: 10px 35px 10px 35px;
    box-shadow: 0px 0px 10px;
    animation: cutombuton 2s ease-in 3s infinite alternate;
}
.custom:hover{
    background:white; 
    color:#9C0C0C;
    border:2px solid #9C0C0C;
    transition: 1s;
    transition-duration: 0.8;
    transition-delay: 0.3;
}

@keyframes cutombuton{

from{
       background:transparent;
    color: white;
    font-weight: bold;
    font-size: 20px;
    margin-top: 25px;
    border: 2px solid white;
    border-radius: 30px;
    padding: 10px 35px 10px 35px;
    box-shadow: 0px 0px 10px;
}


to{
    background:white; 
    color:#9C0C0C;
    border:2px solid #9C0C0C;
    transition: 1s;
    transition-duration: 0.8;
    transition-delay: 0.3; 
}
}



.social_icon{
     
    padding-top: 5px;
    padding-bottom: 5px;
    box-shadow: 0px -5px 10px #00000082;
    position: relative;
}
.social_icon .fab{
    font-size: 33px;
    color: #e8eaed;
    padding: 10px;
}
@media screen and (max-width: 580px) {
.col-sm{
    padding:0px;
}
}

</style>
<script>
export default {
     mounted() {
            console.log('Skills Component mounted.')
        }
}
</script>