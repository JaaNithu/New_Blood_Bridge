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
      <div class="container">

        <ol>
          <li><a href="/index">HOME</a></li>
          <li>CONTACT</li>
        </ol>
        <h2>Contact Us</h2>

      </div>
    </section>
    <div class="container" style=""><br>
        <div class="row justify-content-center align-items-center"><br>
            <div class="col-lg-6">
                <img src="{{ asset('images/Contact.png') }}" alt="" style="width: 100%; ">
            </div>
            <div class="col-lg-6">
                <form class="col align-item-center" style="">
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
@endsection
