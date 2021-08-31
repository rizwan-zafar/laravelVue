<template>
  <div>
    <section class="wrapper-section" id="offers">
      <br /><br /><br />
       
            
      <div class="container">
        <div class="row">
          <div class="col-sm to-spin">
            
            <span >MY SERVICES</span><br /><br />
            <h1 class="h1setting">I Can Make This Awesome Things</h1>
            
            <div class="dot-uper">
              <div></div>
            </div>

          </div>

          <div class="col-sm">
            <!-- first double -->
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body text-center">
                    <br />
                    <i class="set fas fa-tachometer-alt"></i>
                    <br /><br />
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">
                      A complete web app solution for business as per your need
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body text-center">
                    <br />
                    <i class="set fab fa-sketch"></i><br /><br />
                    <h5 class="card-title">Web Designing</h5>
                    <p class="card-text">
                      Attractive, and highly responsive designing
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- second double -->
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body text-center">
                    <br />
                    <i class="fas fa-database"></i>
                    <br /><br />
                    <h5 class="card-title">DataBase</h5>
                    <p class="card-text">
                      Useful and logical database implementation for backend.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body text-center">
                    <br />
                    <i class="fas fa-bug"></i>

                    <br /><br />
                    <h5 class="card-title">Testing</h5>

                    <p class="card-text">
                      Testing each module before delivery.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end send double -->
          </div>
        </div>
      </div>
      <br />
    </section>
  </div>
</template>
<script>
export default {
  mounted() {
    console.log("Navbar Component mounted.");
  },
};


 
</script>
<style scoped>
 
.wrapper-section {
  width: 100%;
  height: auto;

  background-image: url("./backimages/offeringBackHeader.png");
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
.card {
  border: none;
  box-shadow: 5px 7px 13px #90acd1;
  /* border-radius: 15px; */
  background-color: #ffffff;
    animation: changeColor 4s ease-in 3s infinite alternate;
}
@keyframes changeColor{
  0%{
    background: #fff;
     border-top-left-radius: 50px;
     color:black;
  }
  50%{
    background: #dde6f2;
    border-radius: 10px;
  }
  100%{
    background: #f0f4fa;
       border-bottom-right-radius: 50px;
       color:#aa1613;
  }
}

.card .card-body i {
  content: "\f3fd";
  color: black;
  font-size: 40px;

  padding: 10px;
  border-radius: 10px;
  background: #e9eef6;
}
h1 {
  font-weight: bolder;
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
  color:#dde6f2;
  }
}
span {
  color: #9c0c0c;
  font-size: 14px;
  margin-top: 112px;
}


.dot-uper{
      margin-top: 95px;
    margin-left: 119px;
    height: 50px;
    width: 50px;
   
    border-radius: 50%;
    background-color: #dde6f2;
   animation: example1 2s ease-in 3s infinite alternate;
}
.dot-uper div{
    position: relative;
    top: 11px;
    left: 11px;
    border-radius: 50%;
    background-color: #dde6f2;
    height: 25px;
    width: 25px;
      animation: subexample1 2s ease-in 3s infinite alternate;
 
}
 
 .top-dot{
    margin-top: 95px;
    margin-left: 119px;
    height: 50px;
    width: 50px;
   
    border-radius: 50%;
    background-color: #dde6f2;
   animation: example1 2s ease-in 3s infinite alternate;
 }
 .top-dot div{
 position: relative;
    top: 11px;
    left: 11px;
    border-radius: 50%;
    background-color: #dde6f2;
    height: 25px;
    width: 25px;
      animation: subexample2 2s ease-in 3s infinite alternate;
 }
@keyframes example1 {
  from{
    background: #dde6f2;;
   
  }
  to{
    background: white;
  
  }
}
@keyframes subexample1 {
  from{
    background: white;;
  }
  to{
    background: #dde6f2;
  }
}



 

 
</style>