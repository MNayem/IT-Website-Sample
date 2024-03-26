@extends('common.layout')

@section('content')

 <section class="my-5">
   <div class="container">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <header class="headSection bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <svg width="50" height="50">
                      <img class="img-fluid" src="assets/img/food/logo_kfc.svg" alt="">
                    </svg>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">SIGN IN</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>
    </header>

    <section>
      <div class="container">
        <div class="row mb-4">
          <img class="img-fluid" src="assets/img/food/AJat2D7pJgMuoEa6c4diCXsDk.jpg" alt="">
        </div>
        <div class="row mb-4 text-center">
          <h4>FEATURED PRODUCT</h4>
        </div>
        <div class="row mb-4">
          <img class="img-fluid" src="assets/img/food/7Lz6LrqiPmNYncayUZpMGudSS.jpg" alt="">
        </div>
        <div class="row mb-4">
          <img class="img-fluid" src="assets/img/food/uv6ZsrQ2B4vT6uCNCieuqDcC8.jpg" alt="">
        </div>
        <div class="row mb-4">
          <img class="img-fluid" src="assets/img/food/SZU6pfReARQ0yTknaD6nF81cg.jpg" alt="">
        </div>
        <div class="row mb-4">
          <img class="img-fluid" src="assets/img/food/kUZeq0qkSNFS3dv74O3JIlF3J.jpg" alt="">
        </div>
        <div class="row mb-5">
          <img class="img-fluid" src="assets/img/food/D4XVThsqvcEDsvLAV1yreflv0.jpg" alt="">
        </div>
      </div>
    </section>

    <footer class="footSection mt-5">
      <style>
        .footSection{
        box-shadow: 0px 0px 15px 0px gray;
        }
        @media only screen and (max-width: 750px) {
          .foot{display: none;}
          .abc, .bcd, .cde{
            text-align: center;
          }
        }
      </style>
      <div class="container">
        <div class="row my-3"></div>
        <div class="row foot my-3">
          <div class="col">ABOUT KFC</div>
          <div class="col">FEEDBACK</div>
          <div class="col">CONTACT US</div>
          <div class="col">BRAND T & C</div>
          <div class="col">FAQ</div>
          <div class="col">OFFERS T & C</div>
          <div class="col">FIND A KFC</div>
          <div class="col"></div>
          <div class="col"></div>
        </div>
        <div class="row mb-3">
          <hr>
        </div>
        <div class="row mb-5">
          <div class="col-xl-4 col-md-12 text-start abc">
            <style>i{font-size: 30px;}</style>
            <i class="fa-brands fa-facebook-square mx-3" style="color: #4267B2;"></i>
            <i class="fa-brands fa-instagram-square mx-3" style="color: #DC556F;"></i>
            <i class="fa-brands fa-youtube mx-3" style="color: #FF0000;"></i>
            
          </div>
          <div class="col-xl-4 col-md-12 text-center bcd">
            Developed By | 
          </div>
          <div class="col-xl-4 col-md-12 text-end cde">
            © Copyright 2021 KFC. All Rights Reserved.
          </div>
        </div>
        <div class="row mb-5 d-flex justify-content-center">
          <div class="col-8 text-center">
            Food shown are for illustration purpose only. Actual product may differ from the images shown in this website.The KFC name, logos, and related marks are trademarks of KFC, Inc.
          </div>
        </div>
        <div class="row mb-3"></div>
      </div>
      <div>
        <img class="img-fluid" src="assets/img/food/foot.JPG" alt="">
      </div>
    </footer>



   </div>
 </section>

@endsection
