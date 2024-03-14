<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.8/dist/countUp.umd.js"></script>

  @vite(['/resources/js/CountUp.js'])
</head>

  @extends('layouts.app')
    @section('content')
        <!-- Your home page content goes here -->
        {{-- @vite(['/resources/css/nav.css']) --}}
        {{-- <h1>{{$title}}</h1> --}}
        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" data-bs-ride="true" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active c-item">
                <img src="{{ asset('images/Transfusion.jpg') }}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                  <a href="/login" class="btn btn-lg radius-round" style="background: #8b0000; color:#fff; border-radius: 25px; text-transform: uppercase;">Sign in today</a>
                </div>
              </div>
              <div class="carousel-item c-item">
                <img src="{{ asset('images/Testing and Processing.jpeg') }}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                  <a href="#" class="btn btn-lg " style="background: #8b0000; color:#fff; border-radius: 25px; text-transform: uppercase;">Sign in today</a>
                </div>
              </div>
              <div class="carousel-item c-item">
                <img src="{{ asset('images/Donation.JPG') }}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                  <a href="#" class="btn btn-lg" style="background: #8b0000; color:#fff; border-radius: 25px; text-transform: uppercase">Sign in today</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div><br><br>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-lg btn-danger mx-5" style="background: #8b0000; "><i class="fa fa-map-marker-alt"></i>&nbsp; Find a Blood Center  &nbsp;<i class="fa fa-arrow-right"></i></a>
            <a href="#" class="btn btn-lg btn-danger mx-5" style="background: #8b0000; "><i class="fa fa-tint"></i>&nbsp; Current Srilanka Blood Supply  &nbsp;<i class="fa fa-arrow-right"></i></a>
          </div><br><br>
          <div class="card mx-auto my-3" style="max-width: 1000px;border-radius: 20px; position: relative; background: url('{{ asset('images/jn2.jpg') }}') center/cover no-repeat;">
            <div class="row no-gutters">
              <div class="col-12 col-sm-6 col-md-8 d-flex align-items-center" style="color: #fff;">
                <div style="padding-left: 60px; padding-right: 60px">
                  <h2 >Discover the Reality of <br>Blood Donation in <br>Srilanka</h2>
                  <a href="/about" class="btn btn-lg" style="background: #8b0000; color:#fff; border-radius: 25px; text-transform: uppercase;">Learn more</a>
                </div>
              </div>
              <div class="col-6 col-md-4 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/bb.jpeg') }}" class="d-block w-100 c-img" alt="..." style="height: 100%; object-fit: cover; filter: brightness(100%); padding-bottom: 15px; padding-right: 5px">
              </div>
            </div>
          </div><br>
          
            <div class="row h-90 align-items-center text-center">
              <div class="col-md-12 text-center">
                <h1 class="display-4 text-dark text-center"><b>Impact</b></h1>
                <p class="lead text-dark"><b>Our member blood centers are located in 25 districs, in Srilanka.</b></p>
              </div>
              <div class="row align-items-center text-left" >
                <div class="col-sm-4">
                  <div class="card mx-auto my-3 shadow" style="width: 100%; border-radius: 10px; max-width: 350px; height: 380px; background-color: rgba(42, 111, 181, 0.9);">
                    <div class="card-body text-white">
                      <div class="display-4 mb-3">
                        <span class="counter" id="counter1" data-count="60">00</span>%
                      </div>
                      <h5 class="card-title">of blood collection</h5>
                      <p class="card-text">Independent blood centers collect more than half of the U.S. and 25% of the Canadian blood supply, serving more than 150 million people and 3,500 hospitals and healthcare facilities.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card mx-auto my-3 shadow" style="width: 100%; border-radius: 10px; max-width: 350px; height: 380px; background-color: rgba(113, 17, 17, 0.9);;">
                    <div class="card-body text-white">
                      <div class="display-4 mb-3">
                        <span class="counter" id="counter2" data-count="1500">0000</span>
                      </div>
                      <h5 class="card-title">daily donations needed</h5>
                      <p class="card-text">Our members are working to help bring in the 33,000 blood donations that are needed every day to meet patient needs. These lifesaving donations support everything from acute care to ongoing disease management.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card mx-auto my-3 shadow" style="width: 100%; border-radius: 10px; max-width: 350px; height: 380px; background-color: rgba(13, 45, 77, 0.9);">
                    <div class="card-body text-white">
                      <div class="display-4 mb-3">
                        <span class="counter" id="counter3" data-count="150">000</span>+
                      </div>
                      <h5 class="card-title">donor facilities</h5>
                      <p class="card-text">Independent blood centers operate more than 600 donor facilities, investing in the health of their local communities through research, disease management programs, and clinical expertise.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><br>
            <br>
            <div class="row align-items-center text-center">
              <div class="col-md-12 text-center">
                <h1 class="display-4 text-dark text-center uppercase"><b>Partnership</b></h1>
                <p class="lead text-dark"><b>We collaborate with many organizations who help strengthen the blood<br> supply and promote blood donation including:</b></p><br>
              </div>
            </div>
            
            <div class="row align-items-center text-left" style="background: rgba(188, 53, 53, 0.5); background-image: url('{{ asset('images/blur.jpg') }}'); height: 70%;  background-size: cover; background-position: center; object-fit: cover; width: 100%; margin: 0;">
                <div class="col-sm-4 mx-auto d-flex justify-content-center">
                  <img src="{{ asset('images/NBTS.png') }}" alt="" style="filter: brightness(100%); border-radius: 10px; width: 70%; height: auto; shadow">
                </div>
                <div class="col-sm-4 mx-auto d-flex justify-content-center">
                  <img src="{{ asset('images/NCI1.png') }}" alt="" style="filter: brightness(100%); border-radius: 10px; width: 70%; height: auto; shadow">
                </div>
                <div class="col-sm-4 mx-auto d-flex justify-content-center">
                  <img src="{{ asset('images/SVHS.jpg') }}" alt="" style="filter: brightness(100%); border-radius: 10px; width: 70%; height: auto; shadow">
                </div>
            </div><br>
            <div class="d-flex justify-content-center align-items-center">
              <a href="/contact" class="btn btn-lg mx-5" style="background: #120966; color:#fff; border-radius: 25px; text-transform: uppercase;">Become a Partner</a>
            </div>
            
    @endsection