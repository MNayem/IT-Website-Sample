@extends('common.layout')

@section('content')

   <div class="bottomHead" style="min-height: 0;background-color: #E4EBE3;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-center">
            <img class="" style="width:50%;" id="imageChange" src="assets/img/a1.png">
          </div>
          <div class="col-lg-6">
            <img class="img-fluid" src="assets/img/hB2.png" alt="">
          </div>
        </div>
      </div>
      <script type="text/javascript">
          let image = document.getElementById('imageChange');
          let images = ['assets/img/a1.png','assets/img/g1.png','assets/img/w1.png'];
          setInterval(function(){
              let random = Math.floor(Math.random()*3);
              image.src = images[random];
          },800);
      </script>
    </div>




    <section class="academicCarrerSection my-5">
        <div class="container">
            
            <style>.hoverSectionZoom:hover{transform: scale(1.02);cursor: pointer;}</style>
            
            <div class="row">
                <h1 class="my-5 text-center" data-aos="fade-up">Title !!!!</h1>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row align-items-center">
                      <div class="col-lg-4 col-md-12 px-5 ">
                          <img class="img-fluid mb-4" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Web Development</h4> <br>
                          
                      </div>
                      <div class="col-lg-8 col-md-12">
                          <img class="img-fluid" src="assets/img/jibonPNG/web site-01 (1).png" alt="">
                      </div>
                      <div class="px-5">
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/lms') }}">LMS</a> 
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/stockmanagement') }}">Stock</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Ecommerce</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Hospital</a>
                          <p>Sub Title !!!</p> <br>
                      </div>
                      
                  </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row align-items-center">
                      <div class="col-lg-4 col-md-12 px-5 ">
                          <img class="img-fluid mb-4" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Android</h4> <br>
                          
                      </div>
                      <div class="col-lg-8 col-md-12">
                          <img class="img-fluid" src="assets/img/jibonPNG/Mobile Apps-01.png" alt="">
                      </div>
                      <div class="px-5">
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/lms') }}">LMS</a> 
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/stockmanagement') }}">Stock</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Ecommerce</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Hospital</a>
                          <p>Sub Title !!!</p> <br>
                      </div>
                      
                  </div>
                  </div>
                </div>
            </div>
            
            
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row align-items-center">
                      <div class="col-lg-4 col-md-12 px-5 ">
                          <img class="img-fluid mb-4" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Digital Marketing</h4> <br>
                          
                      </div>
                      <div class="col-lg-8 col-md-12">
                          <img class="img-fluid" src="assets/img/jibonPNG/Digital Marketing-01.png" alt="">
                      </div>
                      <div class="px-5">
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Social Midea Marketing</a> 
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Facebook Marketing</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Email Marketing</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ebranding') }}">E-Branding</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/brandpromotion') }}">Brand Promoting</a>
                          <p>Sub Title !!!</p> <br>
                      </div>
                      
                  </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-5 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row align-items-center">
                      <div class="col-lg-4 col-md-12 px-5 ">
                          <img class="img-fluid mb-4" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Freelanching</h4> <br>
                          
                      </div>
                      <div class="col-lg-8 col-md-12">
                          <img class="img-fluid" src="assets/img/jibonPNG/Inventory-01.png" alt="">
                      </div>
                      <div class="px-5">
                          <p>Sub Title !!!</p> <br>
                      </div>
                      
                  </div>
                  </div>
                </div>
            </div>            
           
            <!--চেপটা লেআউট    -->
            
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Software Firm</h4>-->
            <!--              <p class="mb-3">Before admission you can make a free class to justify</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/softwareFirm">Click Here</a>-->
            <!--          </div>-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/courses/of1.png" alt="">-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/courses/of1.png" alt="">-->
            <!--          </div>-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Digital Marketing</h4>-->
            <!--              <p class="mb-3">Before admission you can make a free class to justify</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/digitalMarketing">Click Here</a>-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/osmoBg.png" alt="">-->
            <!--          </div>-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Take a test</h4>-->
            <!--              <p class="mb-3">Our intelligent system report your ability after test</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/careersection">Explore</a>-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/osmoBg.png" alt="">-->
            <!--          </div>-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Give an Exam</h4>-->
            <!--              <p class="mb-3">Our intelligent system report your ability after test</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/giveexamfront">Give Exam</a>-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Trainer</h4>-->
            <!--              <p class="mb-3">Fuel your child’s interest in reading, math, creativity, and more with play-based games!</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/trainerRegistration">Explore</a>-->
            <!--          </div>-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/courses/t4.png" alt="">-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            
        </div>
    </section>

  <!--  <section class="coursesSection py-5" style="background-color: #F5F3FC;">-->
  <!--    <style>-->
  <!--      .boxCourses{-->
  <!--        background-color: white;-->
  <!--        border-radius: 10%;-->
  <!--        box-shadow: 0px 0px 20px 0px rgb(200, 200, 200);-->
  <!--        width: 80%;-->
  <!--      }-->
  <!--      .boxCourses:hover{-->
  <!--        transform: translatey(-15px);-->
  <!--        transition: .5s;-->
  <!--        cursor: pointer;-->
  <!--      }-->
  <!--    </style>-->
  <!--    <div class="container">-->
  <!--        <div class="row text-center d-flex justify-content-center">-->
  <!--          <h1 class="mb-3">Our Others Business</h1>-->
            
  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4 justify-content-center">-->
  <!--                <img class="img-fluid" style="width:50%;" src="assets/img/clientDemo/cnc.png" alt="">-->
  <!--                <h3>Emport CNC Machine</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4">-->
  <!--                <img class="img-fluid" style="width:50%;" src="assets/img/clientDemo/flat.png" alt="">-->
  <!--                <h3>Flat Sell</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4">-->
  <!--                <img class="img-fluid" style="width:50%;" src="assets/img/clientDemo/restaurent.png" alt="">-->
  <!--                <h3>Restaurant</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4">-->
  <!--                <img class="img-fluid" style="width:50%;" src="assets/img/clientDemo/game.png" alt="">-->
  <!--                <h3>Game Equipment</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->
  
    <section class="Ecommerece p-5">
        <style>
            .Ecommerece{background-color:#83C8C0;}
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h2>Ecommerece</h2>
                    <p class="my-3">
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                    <a href="{{ url('/ecommerce') }}" class="btn btn-success">Click Here</a>
                </div>
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/jibonPNG/E-commerce-01.png" alt="">
                </div>
            </div>
        </div>
    </section>  
    <section class="StockManagement p-5">
        <style>
            .StockManagement{background-color:#A2F2E9;}
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/jibonPNG/E-commerce-01.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>Stock Management</h2>
                    <p class="my-3">
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                    <a href="{{ url('/stockmanagement') }}" class="btn btn-success">Click Here</a>
                </div>
            </div>
        </div>
    </section>  
    <section class="LearningManagement p-5">
        <style>
            .LearningManagement{background-color:#CDF8F4;}
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h2>Learning Management</h2>
                    <p class="my-3">
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                    <a href="{{ url('/lms') }}" class="btn btn-success">Click Here</a>
                </div>
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/jibonPNG/lms-01.png" alt="">
                </div>
            </div>
        </div>
    </section>  
    <section class="EBranding p-5">
        <style>
            .EBranding{background-color:#A2F2E9;}
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/jibonPNG/E-commerce-01.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>E-Branding</h2>
                    <p class="my-3">
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                    <a href="{{ url('/ebranding') }}" class="btn btn-success">Click Here</a>
                </div>
            </div>
        </div>
    </section>  
    <section class="BrandPromoting p-5">
        <style>
            .BrandPromoting{background-color:#83C8C0;}
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h2>Brand Promoting</h2>
                    <p class="my-3">
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                    <a href="{{ url('/brandpromotion') }}" class="btn btn-success">Click Here</a>
                </div>
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/jibonPNG/E-commerce-01.png" alt="">
                </div>
            </div>
        </div>
    </section>
  

    <section class="academicCarrerSection my-5">
        <div class="container">
            
            <style>.hoverSectionZoom:hover{transform: scale(1.02);cursor: pointer;}</style>
            
            <div class="row justify-content-center">
                
            </div> 

            <!--<div class="row text-center">-->
                
            <!--    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-down">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row mb-5">-->
            <!--          <div class="col-lg-6 col-md-12">-->
            <!--              <img class="img-fluid" src="assets/img/courses/f111.png" alt="">-->
            <!--          </div>-->
            <!--          <div class="col-lg-6 col-md-12">-->
            <!--             <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4>Before admission you can make a free class to justify</h4>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/academicsection">Freelancing</a>-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-down">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row">-->
            <!--          <div class="col-lg-6 col-md-12">-->
            <!--              <img class="img-fluid" src="assets/img/courses/k2.png" alt="">-->
            <!--          </div>-->
            <!--          <div class="col-lg-6 col-md-12 mb-5">-->
            <!--             <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4>Our intelligent system report your ability after test</h4>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/careersection">Kids Programming</a>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>  -->
            <!--    </div>-->
                
            <!--</div>-->
            
            
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Boking a free class</h4>-->
            <!--              <p class="mb-3">Before admission you can make a free class to justify</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/careersection">Explore</a>-->
            <!--          </div>-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/courses/of1.png" alt="">-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/osmoBg.png" alt="">-->
            <!--          </div>-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Take a test</h4>-->
            <!--              <p class="mb-3">Our intelligent system report your ability after test</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/careersection">Explore</a>-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/osmoBg.png" alt="">-->
            <!--          </div>-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Give an Exam</h4>-->
            <!--              <p class="mb-3">Our intelligent system report your ability after test</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/giveexamfront">Give Exam</a>-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">-->
            <!--      <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">-->
            <!--        <div class="row my-3">-->
            <!--          <div style="text-align:left" class="col-lg-6 col-md-12 px-5">-->
            <!--             <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt">-->
            <!--              <h4 class="mb-3">Trainer</h4>-->
            <!--              <p class="mb-3">Fuel your child’s interest in reading, math, creativity, and more with play-based games!</p>-->
            <!--              <a style="background-color: #803487;color: white;" class="btn" href="/trainerRegistration">Explore</a>-->
            <!--          </div>-->
            <!--          <div class="col-lg-6 col-md-12 text-center my-3">-->
            <!--              <img class="img-fluid" src="assets/img/courses/t4.png" alt="">-->
            <!--          </div>-->
            <!--      </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--</div>-->
            
        </div>
    </section>

  <!--  <section class="coursesSection py-5" style="background-color: #F5F3FC;">-->
  <!--    <style>-->
  <!--      .boxCourses{-->
  <!--        background-color: white;-->
  <!--        border-radius: 10%;-->
  <!--        box-shadow: 0px 0px 20px 0px rgb(200, 200, 200);-->
  <!--        width: 80%;-->
  <!--      }-->
  <!--      .boxCourses:hover{-->
  <!--        transform: translatey(-15px);-->
  <!--        transition: .5s;-->
  <!--        cursor: pointer;-->
  <!--      }-->
  <!--    </style>-->
  <!--    <div class="container">-->
  <!--        <div class="row text-center d-flex justify-content-center">-->
  <!--          <h1 class="mb-3">Engaging courses across subjects</h1>-->
            
  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4 justify-content-center">-->
  <!--                <img class="img-fluid" src="assets/img/math.svg" alt="">-->
  <!--                <h3>Math</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4">-->
  <!--                <img class="img-fluid" src="assets/img/coding.svg" alt="">-->
  <!--                <h3>Coding</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4">-->
  <!--                <img class="img-fluid" src="assets/img/reading.svg" alt="">-->
  <!--                <h3>English</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >-->
  <!--              <div class="boxCourses py-4">-->
  <!--                <img class="img-fluid" src="assets/img/play.svg" alt="">-->
  <!--                <h3>Analytical Ability</h3>-->
  <!--              </div>-->
  <!--            </div>-->

  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->

  <!--<section class="testimonialSection my-5">-->

  <!--      <div class="container">-->
  <!--          <h1 class="text-center">Testimonial</h1>-->
  <!--          <div class="owl-carousel owl-theme mt-5">-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-1.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-2.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-3.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-4.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-5.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-1.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-2.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-3.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->
  <!--              <div class="item text-center px-5">-->
  <!--                  <img style="border-radius:100%;" class="img-fluid" src="assets/img/testimonials/testimonials-4.jpg" alt="">-->
  <!--                  <h3 class="my-2">User</h3>-->
  <!--                  <p>It's Very Good For Learning...</p>-->
  <!--              </div>-->

                
  <!--          </div>-->
  <!--      </div>-->
  <!--  </section>-->
    
    
    <section class="newsAndEvents mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid my-4" src="assets/img/news/cnn.png" alt="">
                    <img class="img-fluid" src="assets/img/news/subimage.png" alt="">
                    <h4 class="my-4">The rise of online learning: How Byju's became India's biggest edtech company</h4>
                    <p>Bangalore-based education technology company Byju's became India's most valuable startup in 2021, as the demand for online learning surged. Source: CNN</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid my-4" src="assets/img/news/forbes.png" alt="">
                    <img class="img-fluid" src="assets/img/news/subimage1.png" alt="">
                    <h4 class="my-4">From India With Love: Unconventional Approach Spells Success For BYJU’S U.S. Market Strategy</h4>
                    <p>EdTech power couple Divya Gokulnath and Byju Raveendran are authoring the next chapter in global.</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid my-4" src="assets/img/news/world_economic.png" alt="">
                    <img class="img-fluid" src="assets/img/news/subimage2.png" alt="">
                    <h4 class="my-4">How COVID-19 has changed the way we educate children</h4>
                    <p>Improving digital inclusion is essential if we are to mitigate future global disruptions and enable equitable access to education.</p>
                </div>
            </div>
        </div>
    </section>
    
@endsection