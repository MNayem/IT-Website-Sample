@extends('common.layout')

@section('content')

 <section class="my-5">
   <div class="container">


    <header class="bg-white">
        <style>
            .nav-link{font-size: 1.5rem;font-weight: bold;}
            .nav-link:hover{color: #F03524 !important;}
            .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {color: #F03524 !important;}
        </style>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                      <img class="img-fluid" src="assets/img/ccsb/100.jpg" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                      <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>

                      <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li> -->

                    </ul>
                  </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="gradeSection">
        <style>
            .gradeSection a{
                background-color: rgb(180, 217, 245);
                color: black;
                padding: 4%;
                text-decoration: none;
            }
            .gradeSection a:hover{
                background-color: rgb(152, 203, 242);
            }
            .abc h1{
                color: white;
                background-color: black;
            }
            @media screen and (min-width: 760px) {
                .abc{
                    top: 50%;
                    left: 9%;
                    position: absolute;
                }
                .abc h1{
                    color: black;
                    background-color: white;
                }
            }
        </style>
        <div class="container">
            <img class="img-fluid" style="position: relative;" src="assets/img/ccsb/first-ever-cambridge-foundation-year-prospective-students-1280x666.jpg" alt="">

            <div class="abc text-start" style="display: inline-block;">
                <h1 class="my-4">Foundation Year for</h1>
                <h1>new students</h1>
            </div>

            <div class="row my-3">
                <div class="col-lg-6 col-md-12 col-sm-12 py-4 mb-3" style="background-color: #6BBBAE;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">Undergraduate</div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <a href="">Learn More</a>
                            <a href="">Find Your Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 py-4 mb-3" style="background-color: #E5007D;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">Postgraduate</div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <a href="">Learn More</a>
                            <a href="">Find Your Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <iframe alt="Youtube" width="100%" height="500" src="https://www.youtube.com/embed/nZ0xviqzUJg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row my-3 text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/linkBox/libraries_-_800.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/linkBox/museums_-_cambridge_university_-_800.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/linkBox/latest_research_homepage.jpg" alt="">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/linkBox/business_-_az1753_young-woman-in-lab-800.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/linkBox/alumni_-_attenboroug_-_box.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/linkBox/sport_-_cambridge_university.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h2>News</h2>
                <p>Updates from across the University</p>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/news/ukraine_colours_getty_756.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/news/2022-news-biobullets-protect-uk-water-378x328.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/news/2022-news-ai-at-cam-378x328.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h2>Events</h2>
                <p>Concerts, lectures, sports events, festivals and more</p>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/news/2022-event-foster-carer-fortnight-378x328.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/news/events-lgbtq-museum-zoology-tours-378x328.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <img class="img-fluid" src="assets/img/ccsb/news/fitzwilliam_378_1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-6">
                    <h2>Student perspectives</h2>
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/8x5NuzrQcQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <h2>Cambridge on Instagram</h2>
                    <img class="img-fluid" src="assets/img/ccsb/social/instagram-cambridge-university-charity-fashion-show-fitzwilliam-museum-576x324.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row my-5">
                <h2>Follow us</h2>
                <img style="width: 5%;" src="assets/img/ccsb/icons/facebook_black.svg" alt="">
                <img style="width: 5%;" src="assets/img/ccsb/icons/instagram_black.svg" alt="">
                <img style="width: 5%;" src="assets/img/ccsb/icons/twitter_blue.svg" alt="">
                <img style="width: 5%;" src="assets/img/ccsb/icons/youtube_black.svg" alt="">
                <img style="width: 5%;" src="assets/img/ccsb/icons/linkedin_black.svg" alt="">
            </div>
        </div>
    </section>

    <footer class="footerSection">
        <style>
            .footerSection a, h6{
                color: white;
                text-decoration: none;
                font-size: .9rem;
            }
            .footerSection a:hover{
                text-decoration: underline;
            }
        </style>
        <div class="container" style="background-color: black;">
            <div class="row pt-4">
                <div class="col-lg-3 col-md-6 col-sm-12 px-4">
                    <a href=""><img class="img-fluid" src="img/100invert.jpg" alt=""></a> <br> <br>
                    <h6>© 2022 University of Cambridge</h6> <br>
                    <a href="">Contact the University</a> <br>
                    <a href="">Accessibility</a> <br>
                    <a href="">Freedom of information</a> <br>
                    <a href="">Privacy policy and cookies</a> <br>
                    <a href="">Statement on Modern Slavery</a> <br>
                    <a href="">Terms and conditions</a> <br>
                    <a href="">University A-Z</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 px-4 my-5">
                    <h6>Study at Cambridge</h6> <br>
                    <a href="">Undergraduate</a> <br>
                    <a href="">Postgraduate</a> <br>
                    <a href="">Continuing education</a> <br>
                    <a href="">Executive and professional education</a> <br>
                    <a href="">Courses in education</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 px-4 mb-5">
                    <h6>About the University</h6> <br>
                    <a href="">How the University and Colleges work</a> <br>
                    <a href="">Give to Cambridge</a> <br>
                    <a href="">Jobs</a> <br>
                    <a href="">Maps</a> <br>
                    <a href="">Visiting the University</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 px-4">
                    <h6>Research at Cambridge</h6> <br>
                    <a href="">Research news</a> <br>
                    <a href="">About research at Cambridge</a> <br>
                    <a href="">Public engagement</a> <br>
                    <a href="">Spotlight on...</a>
                </div>
            </div>
        </div>
    </footer>


   </div>
 </section>

@endsection
