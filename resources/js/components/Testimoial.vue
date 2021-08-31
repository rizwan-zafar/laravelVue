<template>
    <div>
         <section class="wrapper-section" id="testimo"> 
            
             
 <div class="container">
      <div class="text-center">
            <h3 class="title">What Clients Say</h3>
            <p>There is some value feeddback of international Calints</p>
               </div> <br>
     <div class="row">
         <div class="col-sm-12">
             <div  id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
   </div>
                   <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">


                               <div class="col-md-6">
                                <div class="single-box">
                                       <div class="img-text">
                                        <div class="setimage">
                                        <div class="img-area">
                                        <img src="https://us.123rf.com/450wm/stockbroker/stockbroker1709/stockbroker170901924/86206827-happy-baby-girl-playing-with-toys-in-playroom.jpg?ver=6"></div>
                                        </div>
                                        <h2>Rainjo27</h2>
                                           <span>USA</span>
                                        <p>Wonderful and great Artist</p>
                                    </div>
                                </div>
                            </div>


                                <div class="col-md-6">
                                <div class="single-box">
                                       <div class="img-text">
                                        <div class="setimage">
                                        <div class="img-area">
                                        <img src="https://wallpaperaccess.com/thumb/2989737.jpg"></div>
                                        </div>
                                        <h2>JannaT</h2>
                                        <span>Bangladesh</span>
                                        <p>He is very talented, generous. I have never seen anyone do such a beautiful, perfect work before.

                                        </p>
                                    </div>
                                </div>
                            </div>

                           

                           

                        </div>
                    </div>



<!-- second time -->

<div class="carousel-item">
                        <div class="row">


                            


                                <div class="col-md-6">
                                <div class="single-box">
                                       <div class="img-text">
                                        <div class="setimage">
                                        <div class="img-area">
                                        <img src="https://wallpaperaccess.com/thumb/2989737.jpg"></div>
                                        </div>
                                        <h2>Tammana</h2>
                                        <span>Bangladesh</span>
                                        <p>i am highly recommending. This man does a lot of amazing things. I well never forget .  There's even a lot of extra work that i did't iclude when I first orderd it.</p>
                                    </div>
                                </div>
                            </div>


                               <div class="col-md-6">
                                <div class="single-box">
                                       <div class="img-text">
                                        <div class="setimage">
                                        <div class="img-area">
                                        <img src="https://us.123rf.com/450wm/stockbroker/stockbroker1709/stockbroker170901924/86206827-happy-baby-girl-playing-with-toys-in-playroom.jpg?ver=6"></div>
                                        </div>
                                        <h2>Rainjo27</h2>
                                           <span>USA</span>
                                        <p>Another great experience just be patient and carefully explain what you want done</p>
                                    </div>
                                </div>
                            </div>



                          


                        </div>
                    </div>
<!-- end second time -->

                  </div>  
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
            console.log('Testimonial Component mounted.')
        },

}
 
</script>
<style scoped>
section{
  position:relative;
  width:100%;
  min-height:50vh;
  display:flex;
  justify-content: center;
  align-items: center;
   overflow:hidden;
} 
.wrapper-section {
  width: 100%;
  height: auto;

  background-image: url("./backimages/testimonial.png");
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
.container{
    margin-top:10%;
     margin-bottom:10%;
}
.img-text{
    width:100%;
    height:500px;
    display: block;
    text-align: center;
    padding: 6% 5%;
    background: #fff;
    color:black;
    border-radius: 15px;
}
 .img-text h2{
     font-size: 25px;
     text-transform: uppercase;
     letter-spacing: 2px;  
     margin-top:100px;
 }

 .img-text p{
     font-size: 16px;
 }
 .img-text span
 {
     color:#9c0c0c;
 }
 .img-area{
      
     width:100px;
     height: 100px;;
     border:transparent;
     box-shadow: 0px 0px 10px black;
     overflow: hidden;
     display: flex;
     border-radius: 50%;
  
 }
 .img-area img{
     width:100%;
 }
 .setimage{
        display: flex;
        justify-content: center;
        padding-top: 20px;
 }
 ul{
     margin-top:20px;
 }
 .carousel-indicators button{
    background-color: #9c0c0c;
    font-weight: bold;
    width:15px;
    height: 15px;
    border-radius: 50%;
    position: relative;
top: 55px;
}
 @media screen and (max-width: 580px) {
  .img-text h2{
     font-size: 25px;
     text-transform: uppercase;
     letter-spacing: 2px;  
     margin-top:10px !important;
 } 
 
 .img-text{
    width:100%;
    height:350px !important;
    display: block;
    text-align: center;
    padding: 6% 5%;
    background: #fff;
    color:black;
    border-radius: 15px;
}
     
      .setimage{
        display: flex;
        justify-content: center;
        padding-top: 10px;
        padding-bottom:20px;
 }
 }
 .title{ animation: zoomtext 2s ease-in 3s infinite alternate; }
 
 @keyframes zoomtext{
     from{
         font-weight: normal;
     }
     to{
         font-weight: bolder;
     }
 }
</style>