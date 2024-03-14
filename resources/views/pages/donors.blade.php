<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" >
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.8/dist/countUp.umd.js"></script>

@vite(['/public/build/assets/style.css'])
@vite(['/public/assets/js/core/bootstrap.bundle.min.js'])
@vite(['/public/assets/js/core/bootstrap.min.js'])
@vite(['/public/assets/js/core/popper.min.js'])


<style>
  /* Basic styling for image and text sections */
.image-section {
    top: 0px; 
    height: 100vh; /* Adjust as needed */
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    position: sticky;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

}

.text-section {
    background-color: #ffffff;
    padding: 20px;
    height: 500px;
    width: 100%;
    position: sticky;
}

.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 3rem;
    opacity: 0; /* Initially hidden */
    transition: opacity 0.5s ease;
    text-align: center;
    font-weight: bold;
}

/* Fade in overlay text when it comes into view */
.overlay-text.active {
    opacity: 1;
}

/* Style your images and overlay text as desired */
#_1 {
    width: 100%;
    top: 0px;
    height: 100vh; /*Adjust as needed */
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    position: sticky;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

/* Add any additional styling for overlay text */
p {
    font-size: 18px;
    color: #333;
}

.card-body.btn{
  background: #052767;
}

.card-body.btn:hover{
  background-color: #8b0000;
  transition: 0.5s;
}

</style>
</head>


@extends('layouts.app')

@section('content')
    <!-- Your home page content goes here -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/index" style="text-decoration: none">HOME</a></li>
          <li>DONORS</li>
        </ol>
        <h2>Donors</h2>
      </div>
    </section>
<section>
    <!-- Image Section 1 -->
    <div class="image-section">
      <img id="_1" src="{{ asset('images/img (3).jpg') }}" alt="Image 1">
      <div class="overlay-text">Single blood donation can save multiple lives</div>
    </div>

    <!-- Text Section 1 -->
    <div class="text-section">
        <div class="row">
          <div class="col-4" style="margin-left: 100px;">
            <p>Although blood transfusions are needed every two seconds in Sri Lanka, only a small percentage of the population donates blood each year. It is crucial to significantly increase the number of blood donors to ensure an adequate supply while promoting diversity in the blood bank.</p>
            <p>Here you can learn more about who can give blood and the process of blood donation, and get common questions answered so you know what happens before, during, and after your visit to a community blood center.</p>
            <p>Your decision to donate blood will save the lives of your friends and neighbors - making it time especially well spent.</p>
          </div>
          <div class="col-4">
            
          </div>
          <div class="col-md-3">
            <div class="card" style="margin-right: 20px;">
              <h5 class="card-title" style="text-align:center; margin-top: 30px; margin-bottom: 20px;">Quick links</h5>
              <img src="{{asset('images/img (14).jpg')}}" style="margin-left: 20px; margin-right: 20px; height: 150px; width: 220px; " class="card-img-top " alt="...">
              <div class="card-body">
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <button type="button" class="btn btn-lg" >FIND YOUR BLOOD CENTER</button>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Image Section 2 -->
    <div class="image-section">
        <img src="{{ asset('images/img (11).jpg') }}" id="_1" alt="Image 2">
        <div class="overlay-text">Why donate blood?</div>
    </div>

    <!-- Text Section 2 -->
    <div class="text-section">
        <p>Text for Section 2</p>
    </div>

    <!-- Image Section 3 -->
    <div class="image-section">
      <img src="{{ asset('images/img (13).jpg') }}" id="_1" alt="Image 3">
      <div class="overlay-text">It's blood on the shelf that saves lives</div>
    </div>

    <!-- Text Section 3 -->
    <div class="text-section">
        <p>Text for Section 3</p>
    </div>

    <!-- Image Section 4 -->
    <div class="image-section">
      <img src="{{ asset('images/img (6).jpg') }}" id="_1" alt="Image 4">
      <div class="overlay-text">Blood donation types and collection procedures</div>
    </div>

    <!-- Text Section 4 -->
    <div class="text-section">
        <p>Text for Section 4</p>
    </div>

      <!-- Image Section 5 -->
      <div class="image-section">
        <img src="{{ asset('images/img (15).jpg') }}" id="_1" alt="Image 5">
        <div class="overlay-text">Frequently asked questions</div>
        
      </div>
  
      <!-- Text Section 5 -->
      <div class="text-section">
        <p>Text for Section 5</p>
      </div>
    </section>
    <section class="container3" style="background: #bbd7de95; width: 100%; height: 650px;">
      <div class="row">
        <div class="col-6 align-items-center justify-content-center" >
          <h1 class="" style="text-align: center;"><i class="fas far fa-comments fa-3x" style="margin-bottom: 20px; color: #00318b;"></i>Contact</h1>
        </div>
        <div class="col-6">
          <form>
            <div class="col-md-6" style="margin-bottom: 20px;">
              <label for="validationCustom01" class="form-label">Name</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your name" required>
            </div>
            <div class="col-md-6" style="margin-bottom: 20px;">
              <label for="validationCustomUsername" class="form-label">Username</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 20px;">
              <label for="phoneNumber">Phone Number</label>
              <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
            </div>
            <div class="col-md-6" style="margin-bottom: 20px;">
              <label for="inputState" class="form-label">Area of interest</label>
              <select id="inputState" class="form-select" required>
                <option selected>Choose...</option>
                <option>Donor</option>
                <option>Advocacy</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="exampleFormControlTextarea1" class="form-label">How can we help?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="col-auto" style="margin-top: 20px; ">
              <button type="submit" class="btn" style="border-radius: 25px; background:#052767; color: white;">&nbsp;&nbsp;Submit&nbsp;&nbsp;</button>
            </div>
          </form>
        </div>
      </div>
    </section>

  <script>
    const revealElements = document.querySelectorAll('.overlay-text');
    function reveal() {
      revealElements.forEach((element) => {
             const elementTop = element.getBoundingClientRect().top;
             const windowHeight = window.innerHeight;
             if (elementTop < windowHeight) {
                 element.classList.add('active');
             }
         });
     }
    window.addEventListener('scroll', reveal);

    $(window).scroll(function(){
    var scroll = $('section').scrollTop();
    console.log(scroll);
    $('#_1').css({'backgroud-positionY':+(-scroll/2)+'px'});
  });
  // $(window).scroll(function(){
  //   var scroll = $(window).scrollTop();
  //   $('.image-section').css({'background-positionY': 'center '+(-scroll/2)+'px'});
  // });

</script>

@endsection
