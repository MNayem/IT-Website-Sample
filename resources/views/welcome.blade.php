@extends('common.layout')

@section('content')

   <div class="bottomHead" style="min-height: 0;background-color: #E4EBE3;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 text-center">
              <h2>We Do</h2>  <br>
            <img class="" style="width:50%;" id="imageChange" src="assets/img/imageFileChange/w3.png"> <br><br>
            
          </div>
          <div class="col-lg-6">
            <img class="img-fluid" src="assets/img/jibonPNG/All services -arman01.png" alt="">
          </div>
        </div>
      </div>
      <script type="text/javascript">
          let image = document.getElementById('imageChange');
          let images = ['assets/img/imageFileChange/d3.png','assets/img/imageFileChange/g3.png','assets/img/imageFileChange/w3.png'];
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
                <h2 class="my-5 text-center" data-aos="fade-up">Our Services</h2>
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
                          <p>You can make your customize website too.Any design you like you can make. If you want we research your buisness and then we will complete your website with resources. Our websites is SEO freaindly. So don't miss.</p> <br>
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
                          <p> <p>You can make your customize apps too.Any design you like you can make. If you want we research your buisness and then we will complete your website with resources. You can make android or cross platform apps as your wish.</p></p> <br>
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
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Social Media Marketing</a> 
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Facebook Marketing</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ecommerce') }}">Email Marketing</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/ebranding') }}">E-Branding</a>
                          <a class="btn btn-outline-primary mb-1" href="{{ url('/brandpromotion') }}">Brand Promoting</a>
                          <p>Nowadays Digital Marketting is most essential part in buisness. But digital marketting is tricky. If you dont make it properly then you will suffer for both costing and reaching. Any support you want we will provide. please contact before order place. </p> <br>
                      </div>
                      
                  </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5" data-aos="fade-up">
                  <div class="py-5 hoverSectionZoom" style="background-color: #F2F2F2;border-radius: 2%;box-shadow: 0px 0px 15px 2px rgb(200, 200, 200);">
                    <div class="row align-items-center">
                      <div class="col-lg-4 col-md-12 px-5 ">
                          <img class="img-fluid mb-4" src="assets/img/logo/logo.png" alt="" width="90pt"> <br>
                          <h4>Freelancing</h4> <br>
                          
                      </div>
                      <div class="col-lg-8 col-md-12">
                          <img class="img-fluid" src="assets/img/jibonPNG/freelancing-01.png" alt="">
                      </div>
                      <div class="px-5">
                          <p>Young guys we are providing great opportunities for you. If you elegible we will teach you freelancing with minimum cost.There are also opportunity for internship.Offer is for limited time. Please contact for details. </p> <br>
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
                    <h2>E-commerece</h2>
                    <p class="my-3" style="text-align:justify;">
                        Now a days ecommerce is more accepted place than a real shop. Most of the country like China are mostly dependent on this global way of services. So dont late to join the worlds most dynamic way of buisnesses. You can make multi vendor website like Amazon or B2B like Alibaba or drop shipping website or single resturents or shop's website with us.You can also make a ecommerce mobile apps. You can make your content and graphics with us. we will treat your buisness as our own buisness.
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
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/jibonPNG/Inventory-01.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>Stock Management</h2>
                    <p class="my-3" style="text-align:justify;">
                        Our Stock Management Software is a fully automated and user friendly system to use. It will be an extremely helpful product who are using any manual system (such as excel) for his stock and account management. Our software can save a huge amount of his/her time from being wasted. Besides that, being a fully automated system one can use and handle our software easily. Moreover, they are getting a fresh account management tools and get report as they want (daily, weekly or monthly whatever they need). Since there are three different carts, makes 100 times easier now to keep the tracking of the products.
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
                    <p class="my-3" style="text-align:justify;">
                        Our LMS users at the Institutions are very happy to operate their online courses on a one single platform. The users are no longer required to use Zoom separately and make manual reports while all are generated automatically. By bringing all these processes under one platform, we created an efficient and intuitive LMS platform for their Institution. Moreover, we have a modern online quiz system in our LMS from where student can attend different exams and will get his/her performance report with result. Furthermore, we have different dashboard and activities in our system for Student, Trainer and Admin.
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
                    <img style="border-radius: 3%" class="img-fluid" src="assets/img/jibonPNG/e-branding-01.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2>E-Branding</h2>
                    <p class="my-3" style="text-align:justify;">
                        Suppose your buisness in England or America. But it is possible to promote your buisness from others country like Bangladesh. We are very happy that our team is working to promote your brand. They are working around the world. So please contact to get a qutaion.
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
                    <p class="my-3" style="text-align:justify;">
                        Brand promoting is very very important for buisness. Customaer feel safe and proud if he buys a good product from renowned brand. You must need to ensure good quality to make a brand. We know you have worth to do it. After that you need a good digital marketting partners to spread your buisness. We will bw very happy to be your part of buisness through digital marketting. Please set a meeting for details. 
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
    
    
<section class="coursesSection mb-5 py-5" style="background-color: #F5F3FC;">
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
            <h1 class="mb-3">Our Others Client</h1>
            
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4 justify-content-center">
                  <img class="img-fluid" src="assets/img/jibonPNG/c4.png" alt="">
                  <h3>CU</h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/jibonPNG/c2.png" alt="">
                  <h3>Emedi</h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/jibonPNG/c3.png" alt="">
                  <h3>CCSB</h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/jibonPNG/c1.png" alt="">
                  <h3>Easy Diet</h3>
                </div>
              </div>

          </div>
      </div>
  </section>
    
    <section class="newsAndEvents mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                   
                    <img class="img-fluid" src="assets/img/news/eshita1.jpg" alt="">
                    <h4 class="my-4">Eshita, an enterprenior has changed his life through online buisness</h4>
                    <p>Inside Corona whole world change their buisness strategies. Eshita has changed his fortune here. Digital marketting makes her buisness few times better than what was 3 years ago.  </p>
                </div>
                <div class="col-lg-4">
                   
                    <img class="img-fluid" src="assets/img/news/shuvo1.jpg" alt="">
                    <h4 class="my-4"> Versity teacher's has started show their present digitally</h4>
                    <p>Shuvo, A lecturer of Noakhali Science and Technology, a University situated in rural area. In one step Shuvo has improved than others that he has a portfolio where he can show his research to world. It has changed him as well as he is now a common face in University. By looking him a lot of teacher's now want to make a portfolio website.</p>
                </div>
                <div class="col-lg-4">
                    
                    <img class="img-fluid" src="assets/img/news/youtube1.jpg" alt="">
                    <h4 class="my-4">Youtube can a way to show your ability</h4>
                    <p>Now it is common that a rural's person video has more views than a hero or heroin's video.So dont late to show your present in digital worldr</p>
                </div>
            </div>
        </div>
    </section>
    
@endsection