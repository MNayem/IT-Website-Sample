@extends('common.layout')

@section('content')
    <section class="topSection py-5" style="background-color: white;">
        <div class="container">
            <div class="row">
                <p><i class="bi bi-arrow-left"></i> All Business Goal</p>
            </div>
        </div>
    </section>
    <section class="coursesSection py-5" style="background-color: #003A71;">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-4" >
                    <p class="text-light">Get more clients</p>
                    <h1 class="text-white fw-bold my-5">Find new contacts and grow your business.</h1>
                    <p class="text-light">Attract new customers, grow your client base and build customer relationships with Meta tools.</p>
                </div>
                <div class="col-lg-8" style="margin-top:-15%;">
                    <img class="img-fluid" src="assets/img/jibonPNG/fbBlue1.jpg" alt="">
                </div>

            </div>
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
            <!--<h1 class="mb-3">Our Others Business</h1>-->
            
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4 justify-content-center">
                    <img class="img-fluid" src="assets/img/math.svg" alt="">
                    <h3><a class="" href="{{ url('/commonform') }}">LMS</a></h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/coding.svg" alt="">
                  <h3><a class="" href="{{ url('/commonform') }}">Stock</a></h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/reading.svg" alt="">
                  <h3><a class="" href="{{ url('/commonform') }}">Ecommerce</a></h3>
                </div>
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" src="assets/img/play.svg" alt="">
                  <h3><a class="" href="{{ url('/commonform') }}">Hospital</a></h3>
                </div>
              </div>

          </div>
      </div>
    </section>
    
@endsection