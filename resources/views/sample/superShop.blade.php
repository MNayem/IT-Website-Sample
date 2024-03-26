@extends('common.layout')

@section('content')

 <section class="my-5">
   <div class="container">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

		body{font-family: 'Poppins', sans-serif;}
		.topHead{padding: 3% 0px;}
		.search i{font-size: 24px;}
		.social i{font-size: 24px;padding: 0px 10px;}
		.social a i{color: #445268;}
		.downHead{text-align: center;padding: 1% 0px;}
		.downHead a:hover{color: #f15a29;}
		.search{float: left;}
		.social{float: right;}
		.logo{text-align: center;}
		.boishakh22{text-align: center;}
		.boishakh22_text{padding: 5% 0px;}
		.boishakh22_text h1{font-size: 32px;}
		.boishakh22_text p{font-size: 14px;padding: 30px 5%;}
		.ss22{text-align: center;}
		.ss22_text{padding: 5% 0px;}
		.ss22_text h1{font-size: 32px;}
		.ss22_text p{font-size: 14px;padding: 3% 4%;}
		.latest_text{padding: 5% 0px;}
		.latest_text h1{text-align: center;font-size: 32px;}
		.latest_img img{width: 250px;height: 350px;}
		.handPicked_text{padding: 5% 0px;}
		.handPicked_text h1{text-align: center;font-size: 32px;}
		.handPicked_img{text-align: center;}
		.loveChategories_text{padding: 5% 0px;}
		.loveChategories_text h1{text-align: center;font-size: 32px;}
		.loveChategories_img img{width: 250px;height: 350px;}
		.styleInspirations_text{padding: 5% 0px;}
		.styleInspirations_text h1{text-align: center;font-size: 32px;}
		.loveChategories_videos{padding: 1% 0px;}
		.loveChategories_videos h1{font-weight: bold;font-size: 32px;padding: 2% 0px;}
		.footTop{padding: 5% 0px;}
		.footTop i{font-size: 33px;padding: 0px 10px;}
		.footDown{padding: 2% 0px;}
		.footMenu{float: right;}
		.footMenu ul{padding: 0;margin: 0;list-style: none;}
		.footMenu ul li{display: inline;}
		.footMenu ul li a{
			color: black;
			text-decoration: none;
			margin-left: 10px;
			font-size: 15px;
		}

		.featuredBrands {text-align: center;padding: 2% 0;}
		.featuredBrands_text h1{font-size: 32px;padding: 1% 0;}
		.featuredBrands_div {width: 100%;border-top: 5px solid #445268;padding: 1% 0;}
		.featuredBrands_img img{margin-top: 5%;width: 420px;}
		.featuredBrands_img img:hover{box-shadow: 0px 2px 5px gray;}

		.howToOrder {text-align: center;padding: 2% 0;}
		.howToOrder_text h1{font-size: 32px;padding: 1% 0;}
		.howToOrder_div {width: 100%;border-top: 5px solid #445268;padding: 1% 0;}
		.howToOrder_img img{width: 300px;margin-top: 5%;}
		.howToOrder_img img:hover{box-shadow: 0px 2px 5px gray;}

		.featuredCategories {text-align: center;padding: 2% 0;}
		.featuredCategories_text h1{font-size: 32px;padding: 1% 0;}
		.featuredCategories_div {width: 100%;border-top: 5px solid #445268;padding: 1% 0;}
		.featuredCategories_img img{width: 300px;margin-top: 5%;}
		.featuredCategories_img img:hover{box-shadow: 0px 2px 5px gray;}

		.categoriesPart {text-align: center;padding: 2% 0;}
		.categoriesPart_text h1{font-size: 16px;padding: 1% 0;text-align: left;}
		.categoriesPart_div {width: 100%;border-top: 5px solid #445268;padding: 1% 0;}
		.categoriesPart_card{margin-top: 5%;text-align: center;}
		.categoriesPart_card a{text-decoration: none;font-size: 14px;font-weight: bold;}
		.categoriesPart_card .card .card-body a:hover{background: white;color: green;}

		/* Bootstrap */
		.navbar-nav {padding-left: 2%;}
		.navbar-light .navbar-nav .nav-link {color: black;font-size: 14px;}
		.navbar-expand-lg .navbar-nav .nav-link {padding-right: .5rem;padding-left: .5rem;}

	</style>


    <header>
      <div class="container">
        <div class="topHead">
          <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4">
              <div class="search">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4">
              <div class="logo">
                <a class="navbar-brand" href="#">
                  <img src="assets/img/superShop/logo.png" alt="" />
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4">
              <div class="social">
                <a href=""><i class="fa fa-phone" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-user" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="downHead">
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a
                      style="color: #f15a29; font-weight: bold"
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Frozen Items
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      style="color: #f15a29; font-weight: bold"
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Baby Care
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Bakery & Snacks
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Beauty & Hygiene
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Beverages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Dairy
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Grocery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Fresh Produce
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      style="color: #f15a29; font-weight: bold"
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Household & Cleaning
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <section class="slider">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href=""
              ><img src="assets/img/superShop/slider/New/02c8fe0d-644e-4089-b1eb-103a2c96646e.jpg" class="d-block w-100" alt="..."
            /></a>
          </div>
          <div class="carousel-item">
            <a href=""
              ><img
                src="assets/img/superShop/slider/New/5c677ee3-8171-4d58-bc27-6a881d7e90b3.jpg"
                class="d-block w-100"
                alt="..."
            /></a>
          </div>
          <div class="carousel-item">
            <a href=""
              ><img
                src="assets/img/superShop/slider/New/de0e46d4-34b1-4574-a0cb-a12cf29df819.jpg"
                class="d-block w-100"
                alt="..."
            /></a>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="featuredBrands">
      <div class="container">
        <div class="featuredBrands_text">
          <h1>Featured Brands</h1>
        </div>
        <div class="featuredBrands_div"></div>
        <div class="featuredBrands_img">
          <div class="row">
            <div class="col-lg-4"> <img class="img-fluid" src="assets/img/superShop/brand/f072a61b-4a9e-4191-bbb6-04d597b069cd.jpg" alt=""> </div>
            <div class="col-lg-4"> <img class="img-fluid" src="assets/img/superShop/brand/4d3730dc-a396-4997-9ca5-0629fae50d73.jpg" alt=""> </div>
            <div class="col-lg-4"> <img class="img-fluid" src="assets/img/superShop/brand/7cf377cd-4834-4de6-9408-a85ec28c119c.jpg" alt=""> </div>
            
          </div>
        </div>
      </div>
    </section>

    <section class="howToOrder">
      <div class="container">
        <div class="howToOrder_text">
          <h1>How To Order</h1>
        </div>
        <div class="howToOrder_div"></div>
        <div class="howToOrder_img">
          <div class="row">
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/howToOrder/2c1eb53e-57f0-4a9b-9559-357d728cbe29.jpg" alt=""> </div>
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/howToOrder/9f641d27-4d4e-4f2c-b4e0-ad2a1dac6080.jpg" alt=""> </div>
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/howToOrder/53a5f1b1-21a2-4138-8bfd-edd462884b45.jpg" alt=""> </div>
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/howToOrder/caadd86f-7f15-419d-9a3b-05a65607ef39.jpg" alt=""> </div>
          </div>
        </div>
      </div>
    </section>

    <section class="featuredCategories">
      <div class="container">
        <div class="featuredCategories_text">
          <h1>Featured Categories</h1>
        </div>
        <div class="featuredCategories_div"></div>
        <div class="featuredCategories_img">
          <div class="row">
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/featuredCategories/18d8d279-7f21-43ac-ba70-cfcc5425ced0.jpg" alt=""> </div>
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/featuredCategories/33fa9892-3585-4de3-9dee-6089fbfddc17.jpg" alt=""> </div>
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/featuredCategories/53f2ddf1-f6aa-4c6d-87d5-942bd6b7553d.jpg" alt=""> </div>
            <div class="col-lg-3 col-md-6"> <img class="img-fluid" src="assets/img/superShop/featuredCategories/ccfea84b-48c8-4e3e-9661-dbb0b2b1e09c.jpg" alt=""> </div>
          </div>
        </div>
      </div>
    </section>

    <section class="categoriesPart">
      <div class="container">
        <div class="categoriesPart_text">
          <h1>Dairy</h1>
        </div>
        <div class="categoriesPart_div"></div>
        <div class="row">

          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6 d-flex justify-content-center">
            <div class="categoriesPart_card">
                <div class="card" style="width: 10.5rem;">
                  <img src="assets/img/superShop/dairy/ec80c073-ac51-4ae2-b057-578a763abf87.lg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Aarong Dairy Laban <br>(500ml)</h6>
                    <p class="card-text">tk55.00/EA</p>
                    <a href="#" class="btn btn-success">ADD TO CART</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6 d-flex justify-content-center">
            <div class="categoriesPart_card">
                <div class="card" style="width: 10.5rem;">
                  <img src="assets/img/superShop/dairy/db781eaa-975b-4432-a29e-ccdea1b32a84.lg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Sanitarium So Good Almond Orini Milk 1L</h6>
                    <p class="card-text">tk1040.00/EA</p>
                    <a href="#" class="btn btn-success">ADD TO CART</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6 d-flex justify-content-center">
            <div class="categoriesPart_card">
                <div class="card" style="width: 10.5rem;">
                  <img src="assets/img/superShop/dairy/8ccc52a6-e643-4733-93cc-ae5f99b33cf0.lg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Danish Condensed Milk 397gm</h6>
                    <p class="card-text">tk75.00/EA</p>
                    <a href="#" class="btn btn-success">ADD TO CART</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6 d-flex justify-content-center">
            <div class="categoriesPart_card">
                <div class="card" style="width: 10.5rem;">
                  <img src="assets/img/superShop/dairy/4f674413-f744-4019-8e74-0ad428bd63d7.lg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Golden Harvest Spicy Chiken Sauage 340gm</h6>
                    <p class="card-text">tk235.00/EA</p>
                    <a href="#" class="btn btn-success">ADD TO CART</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6 d-flex justify-content-center">
            <div class="categoriesPart_card">
                <div class="card" style="width: 10.5rem;">
                  <img src="assets/img/superShop/dairy/7ac31b3a-0cc0-4d8c-b00d-a5f632d4d1d8.lg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Farm Freah Yoghurt Sour 500ml</h6>
                    <p class="card-text">tk80.00/EA</p>
                    <a href="#" class="btn btn-success">ADD TO CART</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6 d-flex justify-content-center">
            <div class="categoriesPart_card">
                <div class="card" style="width: 10.5rem;">
                  <img src="assets/img/superShop/dairy/8be9ae11-02e4-4597-adbb-80ab88467465.lg.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Radhuni Ready Mix Kala Bhuna Masala 80gm</h6>
                    <p class="card-text">tk70.00/EA</p>
                    <a href="#" class="btn btn-success">ADD TO CART</a>
                  </div>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="styleInspirations">
      <div class="container-fluid">
        <div class="styleInspirations_text">
          <h1>YOUR STYLE INSPIRATIONS</h1>
        </div>
        <div class="loveChategories_videos">
          <div class="row">
            <div class="col-md-6">
              <h1>Caldal Order Process</h1>
              <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/MBjzx4BVqMk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-6">
              <h1>Caldal</h1>
              <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LDoG8D5x-Cg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="footTop">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <img src="assets/img/superShop/logo.png" alt="">
            </div>
            <div class="col-lg-3 col-xs-6" style="text-align: right;">Newsletter</div>
            <div class="col-lg-3 col-xs-6">Your email address</div>
            <div class="col-lg-3 col-xs-6">
              <a href=""><i class="fa-brands fa-facebook-square" style="color: blue;"></i></a>
              <a href=""><i class="fa-brands fa-instagram-square" style="color: purple;"></i></a>
              <a href=""><i class="fa-brands fa-youtube" style="color: red;"></i></a>
              <a href=""><i class="fa-brands fa-whatsapp-square" style="color: green;"></i></a>
            </div>
          </div>
        </div>
        <hr>
        <div class="footDown">
          <div class="row">
            <div class="col-lg-4">© 2022 <span style="font-weight: bold;font-size: 15px;">LEREVE</span>. All rights reserved</div>
            <div class="col-lg-8">
              <div class="footMenu">
                <ul>
                  <li> <a href="">About Us</a> </li>
                  <li> <a href="">Contact Us</a> </li>
                  <li> <a href="">Store Location</a> </li>
                  <li> <a href="">Term & Conditions</a> </li>
                  <li> <a href="">FAQ</a> </li>
                  <li> <a href="">Order Tracking</a> </li>
                  <li> <a href="">Privilege Membership</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


   </div>
 </section>

@endsection
