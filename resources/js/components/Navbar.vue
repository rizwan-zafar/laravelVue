<template>
  <div>
    <nav
      v-scroll="onScroll"
      :class="{ onscroll: scroll }"
      class="
        navbar
        navbar-expand-lg
        navbar-default
        navbar-fixed-top
        navbar-fixed-top
        navbar-light
      "
    > 
      <div class="container-fluid navset">
        <a class="navbar-brand logoer" href="#">R</a>

        <section>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" id="home" aria-current="page" href="#"
                >Home</a
              >
              <a class="nav-link" href="#offers" id="service">Services</a>
              <a class="nav-link" href="#exp">Experiance</a>
              <a class="nav-link" href="#project">Projects</a>
              <a class="nav-link" href="#testimo">Testimonail</a>
              <a class="nav-link" href="#about">About Me</a>
            </div>
          </div>
        </section>
        <section class="btn-section">
          <a href="#hire" class="btn custom">Hire Me</a>
        </section>
      </div>
    </nav>
  </div>
</template>
<script>
export default {
  data() {
    return {
      scroll: false,
    };
  },
  mounted() {
    console.log("Navbar Component mounted.");
  },
  methods: {
    onScroll() {
      if (window.pageYOffset > 30) {
        this.scroll = true;
      } else {
        this.scroll = false;
      }

      //       if(window.pageYOffset>495)
      //       {
      //  document.getElementById("service").style.borderBottom = "1px solid #0000FF";
      //       }
      //  console.log(window.pageYOffset);
    },
  },
};
$(document).ready(function () {
  $(".navset").fadeIn(3000);
});

$("#service").click(function () {
  $("#service").animate(
    {
      scrollTop: $("#service").offset().top - 100,
    },
    1000
  );
  return false;
});

$("#service").waypoint(
  function () {
    $("#home").children().removeClass("active");
    $("#service").addClass("active");
  },
  { offset: 101 }
);
</script>
<style scoped>
.logoer {
  font-weight: bold;
  font-size: 23px;
  border-radius: 20px;
  border-top: 3px solid;
  color: rgb(156 19 12);
  position: relative;
  animation: mymove 2s ease-in 3s infinite alternate;
}
 
/* animation */

@keyframes mymove {
  0% {
    left: 0px;
    color: #90acd2
    }
  
  100% {left: 50px;
   }
 
}
  /* end animaton */


.onscroll {
  transition: 1s;
  transition-duration: 1s;
  background: #fff;
  box-shadow: 0px 1px 35px black;
}
.navset {
  justify-content: space-around;
}

@media screen and (max-width: 580px) {
  .btn-section {
    display: none;
  }
  .navset {
    justify-content: right;
  }
}

.navbar-nav a {
  margin-right: 30px;
}

.navbar-fixed-top {
  position: fixed;
  right: 0;
  left: 0;
  top: 0;
  z-index: 1030;
}

@media screen and (max-width: 991px) {
  .nav {
    margin-right: 0;
  }
  .navset {
    justify-content: space-between;
  }
}

/* nav button */
.custom {
  background: transparent;
  color: #9c0c0c;
  font-weight: bold;
  font-size: 20px;
  animation: cutombuton 4s ease-in 3s infinite alternate;
  border: 2px solid #9c0c0c;
  border-radius: 30px;
  padding: 4px 35px 4px 35px;
  box-shadow: 0px 0px 10px;
}
.custom:hover {
  background: #9c0c0c;
  color: white;
  border: 2px solid #9c0c0c;
  transition: 1s;
  transition-duration: 0.8;
  transition-delay: 0.3;
}

@keyframes cutombuton{
  from{
     background: transparent;
  color: #9c0c0c;
  font-weight: bold;
  font-size: 20px;

  border: 2px solid #9c0c0c;
  border-radius: 30px;
  padding: 4px 35px 4px 35px;
  box-shadow: 0px 0px 10px;
  }
  to{
     background: #9c0c0c;
  color: white;
  border: 2px solid #9c0c0c;
  transition: 1s;
  transition-duration: 0.8;
  transition-delay: 0.3;
  }
}

div .navbar > .container,
.navbar > .container-fluid,
.navbar > .container-lg,
.navbar > .container-md,
.navbar > .container-sm,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: unset;
  /* justify-content: space-between; */


}
  
</style>
