@extends('common.layout')

@section('content')

<section class="coursesSection mb-5 py-5" style="background-color: #F5F3FC;">
      <style>
        .boxCourses{
          background-color: white;
          border-radius: 10%;
          box-shadow: 0px 0px 20px 0px rgb(200, 200, 200);
          width: 90%;
        }
        .boxCourses:hover{
          transform: translatey(-15px);
          transition: .5s;
          cursor: pointer;
        }
      </style>
      <div class="container">
          <div class="row text-center d-flex justify-content-center">
            <h2 class="mb-3">About Us</h2>
            
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" style="width:150px;border-radius:100%;" src="assets/img/aboutUs/Joy.jpg" alt="">
                  <h3>Joy Rahman</h3>
                  <h6 class="text-danger">Manager</h6>
                  <p>shafiqur.rahman@plan2career.net</p>
                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#joy">Details</button>
                </div>
                <!-- nayemModal -->
                    <div class="modal fade" id="joy" tabindex="-1" aria-labelledby="joyLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="joyLabel">Joy Rahman</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Details is comming soon :)
                          </div>
                        </div>
                      </div>
                    </div>  
              </div>
            
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" style="width:150px;border-radius:100%;" src="assets/img/aboutUs/Shamim.jpg" alt="">
                  <h3>Shamim Reza</h3>
                  <h6 class="text-danger">Project Manager</h6>
                  <p>shamim.reza@plan2career.net</p>
                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#shamim">Details</button>
                </div>
                <!-- shamimModal -->
                    <div class="modal fade" id="shamim" tabindex="-1" aria-labelledby="shamimLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="shamimLabel">Shamim Reza</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Details Comming Soon
                          </div>
                        </div>
                      </div>
                    </div>  
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" style="width:150px;border-radius:100%;" src="assets/img/aboutUs/Nayem.jpg" alt="">
                  <h3>Md. Nayem</h3>
                  <h6 class="text-danger">Backend Developer</h6>
                  <p>md.nayem@plan2career.net</p>
                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#nayem">Details</button>
                </div>
                <!-- nayemModal -->
                    <div class="modal fade" id="nayem" tabindex="-1" aria-labelledby="nayemLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="nayemLabel">Md. Nayem</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            I am a Master's degree student in Computer Science and Technology at Zhejiang Sci-Tech University, China. I am working here as the Backend Developer
                          </div>
                        </div>
                      </div>
                    </div>  
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" style="width:150px;border-radius:100%;" src="assets/img/aboutUs/Arman.jpg" alt="">
                  <h3>Arman Sharif</h3>
                  <h6 class="text-danger">Frontend Designer</h6>
                  <p>arman.sharif@plan2career.net</p>
                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#arman">Details</button>
                </div>
                <!-- ArmanModal -->
                    <div class="modal fade" id="arman" tabindex="-1" aria-labelledby="armanLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="armanLabel">Arman Sharif</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            I am Arman and I'm a young frontend developer with almost 6+ months of experience in the industry. 
                            Right now, I am working as a senior frontend developer at Plan2Career. <br><br> I always prefer quality work. 
                            I love learning new stuff and I can learn and adapt new technologies on the fly. 
                            Apart from Web Development I also love Arduino and robotics.
                          </div>
                        </div>
                      </div>
                    </div>   
              </div>

              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" style="width:150px;border-radius:100%;" src="assets/img/aboutUs/Farhan.jpg" alt="">
                  <h3>Farhan Masuk</h3>
                  <h6 class="text-danger">Frontend Designer <br> (Junior)</h6>
                  <p>farhan.masuk@plan2career.net</p>
                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#farhan">Details</button>
                </div>
                <!-- farhanModal -->
                    <div class="modal fade" id="farhan" tabindex="-1" aria-labelledby="farhanLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="farhanLabel">Farhan Masuk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Assalamu Alaikum, I am Farhan. I have finished Bsc in computer science & engineering from Daffodil International University. 
                            I'm here as a junior frontend designer.
                          </div>
                        </div>
                      </div>
                    </div>  
              </div>
              
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3 d-flex justify-content-center" >
                <div class="boxCourses py-4">
                  <img class="img-fluid" style="width:150px;border-radius:100%;" src="assets/img/aboutUs/Jibon.jpg" alt="">
                  <h3>Zaman Jibon</h3>
                  <h6 class="text-danger">Graphics Designer & IT Executive</h6>
                  <p>zaman.jibon@plan2career.net</p>
                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#jibon">Details</button>
                </div>
                <!-- jibonModal -->
                    <div class="modal fade" id="jibon" tabindex="-1" aria-labelledby="jibonLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="jibonLabel">Zaman Jibon</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Assalamu Alaikum, I am Jibon. I'm studying in Shandong University  of Technology(China). 
                            Department of Computer Science and Technology(CST). 
                            I'm here as a Graphics & UX/UI Designer.
                          </div>
                        </div>
                      </div>
                    </div>  
              </div>

          </div>
      </div>
  </section>

@endsection
