<template>
  <div>
    <section class="wrapper-section" id="exp">
      <br />
      <div class="text-center">
        <h3>Education <span class="text-danger">&</span> Experiance</h3>
      </div>

      <div class="container">
        <div class="row">
          <!-- education -->

          <div class="col-sm-6">
            <img
              :src="baseURL + 'foreducation.png'"
              class="img-fluid educationimage"
            />
          </div>

          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <p class="card-text year">2016 - 2020</p>
                <h4 class="card-title">Software Engineering</h4>
                <p class="card-text uni">University of Gujrat</p>
                <p class="card-text des">
                  I finished software engineering at Gujrat University. where to
                  read various important software topics.for example
                </p>
                <ul>
                  <li>Advance Web Development</li>
                  <li>Software Design and Architecture</li>
                  <li>Agile Software Development</li>
                  <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdroper"
                      >More Details</a
                    >
                  </li>
                  <br />
                </ul>
                <p class="card-text year">1 year Expriance</p>
                <h4 class="card-title">Web Designing and Development</h4>
                <p class="card-text comp">- Baron Tec, Software House</p>
                <p class="card-text uni">Lahore, Pakistan</p>
                <p class="card-text des">
                  I started working in Baron Tec company 10/2020 and still
                  working
                </p>

                <a
                  href="#"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                  >More Details</a
                >
              </div>
            </div>
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

            <!-- Modal -->
            <div
              class="modal fade"
              id="staticBackdroper"
              data-bs-backdrop="static"
              data-bs-keyboard="false"
              tabindex="-1"
              aria-labelledby="staticBackdroperLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdroperLabel">
                      About Education
                    </h4>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <p class="card-text year">2016 - 2020</p>
                    <h4 class="card-title">Software Engineering</h4>
                    <p class="card-text uni">University of Gujrat</p>
                    <p class="card-text des">
                      I finished software engineering at Gujrat University.
                      where to read various important software topics.for
                      example
                    </p>
                    <ul>
                      <li>Advance Web Development</li>
                      <li>Software Design and Architecture</li>

                      <li>Agile Software Engineering</li>
                      <li>Software Design and Architecture</li>

                      <li>Artifical Intelligence</li>
                      <li>Mobile App Development</li>

                      <li>Object Orianted Software Engineering</li>
                      <li>Advance Programming Techniques</li>

                      <li>Softwre Project Management</li>
                      <li>Total Quality Management</li>

                      <li>Softwre Verification Validation</li>
                      <li>Total Quality Management</li>

                      <li>Software Engineering Eoconomics</li>
                      <li>Software Requirement Specification</li>
                    </ul>

                    <p class="card-text year">2016</p>
                    <h4 class="card-title">Intermediate Computer Science</h4>
                    <p class="card-text uni">Govt, Inter College</p>
                    <p class="card-text des">
                      I finished Intermediate Study about Computer and Basics of
                      Computer Programming
                    </p>

                    <br /><br />

                    <p class="card-text year">2014</p>
                    <h4 class="card-title">Computer Science</h4>
                    <p class="card-text uni">Govt, High School</p>
                    <p class="card-text des">
                      I finished Computer Science Basic Study in Govt,High
                      School
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-dismiss="modal"
                    >
                      Understood
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- end education -->

          <!-- Modal of experiance -->
          <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    About Experiance
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="card-body">
                    <ul>
                      <p class="card-text year">1 year Expriance</p>
                      <h4 class="card-title">Web Designing and Development</h4>
                      <li>
                        <p class="card-text comp">Baron Tec, Software House</p>
                        <p class="card-text uni">Lahore, Pakistan</p>
                        <p class="card-text des">
                          I started working in Baron Tec company 10/2020 and
                          still working
                        </p>
                      </li>
                      <br />
                      <li>
                        <p class="card-text comp">Happii PVT LTD,</p>
                        <p class="card-text uni">Lahore, Pakistan</p>
                        <p class="card-text des">
                          I started working at Happii Company and continued for
                          a short time then had to leave because of Corrana
                          Lockdonw
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-dismiss="modal"
                  >
                    Understood
                  </button>
                </div>
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
    console.log("Resume Component mounted.");
  },
};
</script>
<style>
.wrapper-section {
  width: 100%;
  height: auto;

  background-image: url("./backimages/resumeback.png");

  background-repeat: no-repeat;
  background-size: 100% 100%;
}
.card {
  border: none;

  background: transparent;
}

.year {
  color: rgb(156, 12, 12);
  font-weight: bold;
}
.card-body h4 {
  color: rgb(156, 12, 12);
  font-weight: bold;
}
.uni {
  color: #0000007d;
}
.comp {
  color: rgb(88 88 88);
}

@media screen and (max-width: 580px) {
  h3 {
    font-size: 16px;
    margin-left: 20px;
    font-weight: bold;
  }
  .card {
    border: none;
    box-shadow: 5px 7px 13px #90acd1;
    border-radius: 15px;
    background-color: #ffffff;
  }
  section div h3 span {
    color: #dc3545 !important;
    padding-top: 0px;
    padding-top: 0px;
  }
}
h3 {
  font-weight: bold;
}
section div h3 span {
  color: #dc3545 !important;
  font-size: 53px;
  padding-bottom: 10px;
}
.educationimage {
  box-shadow: 1px 1px 10px #90acd1;
  border-radius: 20px;
  padding-left: 10px;
}
</style>