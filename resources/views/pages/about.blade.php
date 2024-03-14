<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.8/dist/countUp.umd.js"></script>

  @vite(['/resources/js/CountUp.js'])
  @vite(['/public/build/assets/main.js'])
@vite(['/public/build/assets/style.css'])
</head>


@extends('layouts.app')


@section('content')
    <!-- Your home page content goes here -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container1" style="margin-left: 95px">
        <ol>
          <li><a href="/index" style="text-decoration: none">HOME</a></li>
          <li>ABOUT US</li>
        </ol>
        <h2>About Us</h2>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="card mb-3" >
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 40px; margin: 20px;">Founded in 1962, America's Blood Centers is the national organization bringing together community-based, independent blood centers.</h5>
                <p class="card-text" style="font-size: 1.1rem;">Our member organizations operate more than 600 blood collection sites providing close to 60 percent of the U.S., and a quarter of the Canadian, blood supply. These blood centers serve more than 150 million people and provide blood products and services to more than 3,500 hospitals and healthcare facilities across North America. All ABC U.S. members are licensed and regulated by the U.S. Food and Drug Administration.</p>
                <img src="{{ asset('images/bb.jpeg') }}" class="card-img-top" style="width: 90%; height: 30%; margin-bottom: 30px; margin-top: 30px;" alt="...">
                <p class="card-text" style="font-size: 1.1rem;" >We provide representation and advocacy on behalf of our member blood centers, ensuring their voices are heard in the development of national health policy and before decisionmakers in federal agencies and the U.S. Congress. ABC also provides its members with a wide variety of resources and programs, including scientific, medical, technical, quality, and regulatory expertise. Additionally, members receive access to education and networking workshops, publications, sharing of best practices; and benchmarking reports. ABC has been recognized by the U.S. Congress for our critical work in patient care and disaster preparedness and response.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row row-cols-1 row-cols-md-1 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/img (9).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-img-overlay" style="margin-top: 30px;">
                      <p style="font-size: 2rem; color: white">Find a Blood Center</p>
                      <a href="#" class="btn" style="margin-top: 20px; border-radius: 25px; background:#052767; color: white;">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-1 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/bb.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="btn" style="border-radius: 25px; background:#052767; color: white;">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container3" style="background: #bbd7de95; width: 100%; height: 1000px;">
        
          <div class="row align-items-center justify-content-center" style="margin-bottom: 30px;">
              <div class="col-md-6 ">
                  <div class="row ">
                    <h1 style="text-align: center">Our Vision</h1>
                    <p>A thriving blood center community ensuring safe and available blood for every patient in need.</p>
                  </div>
                  <div class="row ">
                    <h1 style="text-align: center">Our Mision</h1>
                    <p >Amplify and advance the contributions of community blood centers to individuals, communities, and the healthcare system. We accomplish our mission through advocacy, awareness, and collaboration.</p>
                  </div>
              </div>
          </div>

          <div class="row align-items-center " style="margin-left: 30px; margin-bottom: 30px;">
            <div class="col-md-3">
                <h3>Sri Lanka protects and advances our members' interests by:</h3>
            </div>
            <div class="col-md-9  border-start border-secondary">
              <div class="row">
                <div class="col-md border-end border-secondary">
                  <i class="fas fa-gavel fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                  <p><b>Advocating</b> for laws and regulations recognizing the essential role that independent blood centers play in the healthcare system.</p>
                  
                </div>
                <div class="col-md border-end border-secondary" style="margin-left: 20px;">
                  <i class="far fa-handshake fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for an icon -->
                  <p><b>Promoting </b>partnerships, policies and programs that increase awareness about the need for blood donation.</p>
                </div>
                <div class="col-md " style="margin-left: 20px;">
                  <i class="fas fa-lightbulb fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                  <p><b>Serving </b>as a thought-leader in the advancement of evidence-based medical and scientific solutions related to health and safety.</p>
                </div>
              </div>
            </div>
          </div>
        <hr>

        <div class="row align-items-center" style="margin-left: 30px;">
          <div class="col-md-3 " style="align-content: center;">
              <h3>Our Values</h3>
          </div>
          <div class="col-md-9   border-start border-secondary">
            <div class="row">
              <div class="col-md border-end border-secondary">
                <i class="fas fas fa-users fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                  <p><b>Commitment and accountability</b> to the public good and our members.</p>
              </div>
              <div class="col-md border-end border-secondary" style="margin-left: 20px;">
                <i class="fas fa-check fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                <p><b>Commitment </b>beyond the law.</p>
              </div>
              <div class="col-md " style="margin-left: 20px;">
                <i class="fas fa-hand-holding-heart fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                <p><b>Respect </b>for the worth and dignity of individuals.</p>
              </div>
            </div>
            <hr>
            <div class="row " >
              <div class="col-md border-end border-secondary">
                <i class="fas fa-globe fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                <p><b>Inclusiveness, social justice</b> and respect for diversity.</p>
              </div>
              <div class="col-md border-end border-secondary" style="margin-left: 20px;">
                <i class="fas fa-eye fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                <p><b>Transparency, integrity and honesty</b> and responsible stewardship of resources.</p>
              </div>
              <div class="col-md " style="margin-left: 20px;">
                <i class="fas fa-heart fa-2x" style="margin-bottom: 20px; color: #8b0000;"></i> <!-- Placeholder for another icon -->
                <p><b>Commitment</b> to excellence and to maintaining the public trust.</p>
              </div>
            </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container4" style="margin-top: 40px;">
        <div class="row">
          <div class="col-6 align-items-center" >
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
      </div>
    </section>
@endsection
