@extends('common.layout')

@section('content')

   <div class="bottomHead" style="min-height: 0;background-color: #E4EBE3;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <img class="img-fluid" src="assets/img/hB2.png" alt="">
          </div>
          <div class="col-lg-6 align-items-center">

    <style>
        body{
            /*background-color: white;*/
        }
        .wrapper{ 
            display: inline-flex; 
        }
        .wrapper .static-txt{
            color: green;
            font-size: 3rem;
            font-weight: bold;
        }
        .wrapper .dynamic-txts{
            margin-left: 140px;
            line-height: 90px;
            height: 80px;
            margin-top: -15%;
            overflow: hidden;
        }
        .dynamic-txts li{
            color: red;
            list-style: none;
            font-size: 3rem;
            font-weight: bold;
            top: 0;
            position: relative;
            animation: slide 6s steps(4) infinite;
        }
        @keyframes slide{
            100%{
                top: -360px;
            }
        }
        .dynamic-txts li span{
            position: relative;
        }
        .dynamic-txts li span::after{
            content: " ";
            position: absolute;
            height: 90%;
            width: 100%;
            background-color: #E4EBE3;
            border-left: 2px solid red;
            left: 0;
            animation: typing 1.5s steps(10) infinite;
        }
        @keyframes typing{
            100%{
                left: 100%;
                margin: 0 -100px 0 100px;
            }
        }

    </style>
    <div class="wrapper">
        <div class="static-txt">
            I'm a 
            <ul class="dynamic-txts">
                <li> <span> Graphics Designer </span> </li>
                <li> <span> Web Designer </span> </li>
                <li> <span> Web Developer </span> </li>
                <li> <span> Software Engineer </span> </li>
            </ul>
        </div>
    </div>


          </div>
        </div>
      </div>
    </div>




    <section class="academicCarrerSection my-5">
        <div class="container">
            
            <style>.hoverSectionZoom:hover{transform: scale(1.02);cursor: pointer;}</style>
            
            <div class="row">
                <h1 class="my-5" data-aos="fade-up">A learning program for every student</h1>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 px-5">
                          <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Live 1-on-1</h4> <br>
                          <p>Personalised, 1-on-1 tutoring classes with expert teachers.</p> <br>
                          <a class="" href="/">Explore -></a>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <img class="img-fluid" src="assets/img/Epic1.png" alt="">
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 px-5">
                          <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Academic</h4> <br>
                          <a class="btn btn-outline-primary" href="/">HSC</a> 
                          <a class="btn btn-outline-primary" href="/">Admission</a> <br> <br>
                          <p>Personalised, 1-on-1 tutoring classes with expert teachers.</p> <br>
                          <a class="" href="/">Explore -></a>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <img class="img-fluid" src="assets/img/Epic1.png" alt="">
                      </div>
                  </div>
                  </div>
                </div>
            </div>
            
            
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 px-5">
                          <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Career</h4> <br>
                          <a class="btn btn-outline-primary" href="/">Job Math</a> 
                          <a class="btn btn-outline-primary" href="/">SAT Math</a> <br> <br>
                          <p>Personalised, 1-on-1 tutoring classes with expert teachers.</p> <br>
                          <a class="" href="/">Explore -></a>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <img class="img-fluid" src="assets/img/Epic1.png" alt="">
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 px-5">
                          <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Kids Programming</h4> <br>
                          <a class="btn btn-outline-primary" href="/">Grade 3-7</a> 
                          <a class="btn btn-outline-primary" href="/">Grade 6-10</a> <br> <br>
                          <p>Personalised, 1-on-1 tutoring classes with expert teachers.</p> <br>
                          <a class="" href="/">Explore -></a>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <img class="img-fluid" src="assets/img/Epic1.png" alt="">
                      </div>
                  </div>
                  </div>
                </div>
            </div>            
            
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 px-5">
                          <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Freelancing</h4> <br>
                          <a class="btn btn-outline-primary" href="/">Graphics Design</a> 
                          <a class="btn btn-outline-primary" href="/">Wed Development</a> 
                          <a class="btn btn-outline-primary" href="/">Digital Marketing</a> <br> <br>
                          <p>Personalised, 1-on-1 tutoring classes with expert teachers.</p> <br>
                          <a class="" href="/">Explore -></a>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <img class="img-fluid" src="assets/img/Epic1.png" alt="">
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 px-5">
                          <img class="img-fluid" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Product Photography</h4> <br>
                          <a class="btn btn-outline-primary" href="/">Documentory</a> 
                          <a class="btn btn-outline-primary" href="/">Food</a> 
                          <a class="btn btn-outline-primary" href="/">Others</a> <br> <br>
                          <p>Personalised, 1-on-1 tutoring classes with expert teachers.</p> <br>
                          <a class="" href="/">Explore -></a>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <img class="img-fluid" src="assets/img/Epic1.png" alt="">
                      </div>
                  </div>
                  </div>
                </div>
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
            
            
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row my-3">
                      <div style="text-align:left" class="col-lg-6 col-md-12 px-5">
                         <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">
                          <h4 class="mb-3">Software Firm</h4>
                          <p class="mb-3">Before admission you can make a free class to justify</p>
                          <a style="background-color: #803487;color: white;" class="btn" href="/softwareFirm">Click Here</a>
                      </div>
                      <div class="col-lg-6 col-md-12 text-center my-3">
                          <img class="img-fluid" src="assets/img/courses/of1.png" alt="">
                      </div>
                  </div>
                  </div>
                </div>
            </div>
            
            
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-2 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row my-3">
                      <div class="col-lg-6 col-md-12 text-center my-3">
                          <img class="img-fluid" src="assets/img/courses/of1.png" alt="">
                      </div>
                      <div style="text-align:left" class="col-lg-6 col-md-12 px-5">
                         <img class="img-fluid my-3" src="assets/img/logo/logo.png" alt="" width="90pt">
                          <h4 class="mb-3">Digital Marketing</h4>
                          <p class="mb-3">Before admission you can make a free class to justify</p>
                          <a style="background-color: #803487;color: white;" class="btn" href="/digitalMarketing">Click Here</a>
                      </div>
                  </div>
                  </div>
                </div>
            </div>
           
            
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

    <section class="coursesSection py-5" style="background-color: #F5F3FC;">
      <style>
        .boxCourses{
          background-color: white;
          border-radius: 10%;
          box-shadow: 0px 0px 20px 0px rgb(200, 200, 200);
          width: 80%;
        }
        .boxCourses:hover{
          transform: translatey(-15px);
          transition: .5s;
          cursor: pointer;
        }
      </style>
      <div class="container">
          <div class="row text-center d-flex justify-content-center">
            <h1 class="mb-3">Our Others Business</h1>
            
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4 justify-content-center">
                  <img class="img-fluid" src="assets/img/math.svg" alt="">
                  <h3>Emport CNC Machine</h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/coding.svg" alt="">
                  <h3>Flat Sell</h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/reading.svg" alt="">
                  <h3>Restaurant</h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/play.svg" alt="">
                  <h3>Game Equipment</h3>
                </div>
              </div>

          </div>
      </div>
  </section>
  
    <section class="webAppsSection p-5">
        <style>
            .webAppsSection{
                background-color:#83C8C0;
            }
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h2>Unlock the Meta Business Partner Badge</h2>
                    <p>
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/Digital Marketing-01.png" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section class="dMarketingSection p-5">
        <style>
            .dMarketingSection{
                background-color:#a2f2e9;
            }
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/Mobile Apps-01.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>Unlock the Meta Business Partner Badge</h2>
                    <p>
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="appsSection p-5">
        <style>
            .appsSection{
                background-color:#cdf8f4;
            }
        </style>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h2>Unlock the Meta Business Partner Badge</h2>
                    <p>
                        Upon becoming an Agency Partner can unlock a Meta Business Partner badge to display on your agency marketing collateral, get listed in our Partner Directory to benefit from increased exposure to potential clients, and get additional benefits like advanced support, more advanced agency-specific resources and a host of training options to help develop your talents.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/web site-01 (1).png" alt="">
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
            <div class="row my-5 p-3 text-center" style="background-color:#EEF0EF; border-radius:5%">
                <h1 class="mb-5">P2C in the news</h1>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <iframe width="95%" height="100%" src="https://www.youtube.com/embed/4XGLPTtn4xQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-5">
                    <h2>CNN</h2>
                    <h4>The rise of online learning: How Byju's became India's biggest edtech company</h4>
                    <p>Bangalore-based education technology company Byju's became India's most valuable startup in 2021, as the demand for online learning surged. Source: CNN</p>
                </div>
                <div class="col-lg-1"></div>
            </div>
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