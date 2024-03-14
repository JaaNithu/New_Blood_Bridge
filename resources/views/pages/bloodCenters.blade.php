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
          <li>BLOOD CENTER</li>
        </ol>
        <h2>Blood Center</h2>
      </div>
    </section>
    <section class="container3" style="background: #bbd7de95; width: 100%;">
      <div class="wrapper">
        <div class="row align-items-center">
            <div class="col-lg-4">
              <label>Your location:</label>
              <input type="text" class="form-control" placeholder="Location">
            </div>
          
            <div class="col-lg-4">
              <label>Blood Group:</label>
              <select class="form-select">
                <option selected>Choose...</option>
                <option value="1">A+</option>
                <option value="2">A-</option>
                <option value="3">B+</option>
                <option value="4">B-</option>
                <option value="5">AB+</option>
                <option value="6">AB-</option>
                <option value="7">O+</option>
                <option value="8">O-</option>
              </select>
            </div>
          
            <div class="col-lg-3" >
              <button type="search" class="btn btn-primary" style="margin-top: 20px;">Search</button>
            </div>
          </form>
        </div><br>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-8">

          </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora ad totam illo. Animi consequatur culpa facere minus aperiam nulla nesciunt dolorum expedita nobis quaerat, quis nisi, quidem ab placeat.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia sapiente a corrupti magnam, soluta dicta officiis. Cupiditate modi harum numquam, alias deserunt quasi, vero sit, eligendi voluptas ex laboriosam nemo?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia sapiente a corrupti magnam, soluta dicta officiis. Cupiditate modi harum numquam, alias deserunt quasi, vero sit, eligendi voluptas ex laboriosam nemo?</p><br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia sapiente a corrupti magnam, soluta dicta officiis. Cupiditate modi harum numquam, alias deserunt quasi, vero sit, eligendi voluptas ex laboriosam nemo?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia sapiente a corrupti magnam, soluta dicta officiis. Cupiditate modi harum numquam, alias deserunt quasi, vero sit, eligendi voluptas ex laboriosam nemo?</p><br>
        </div>
    </section>
    <style>
      .wrapper{
        position: relative;
        width: 1000px;
        margin: 100px auto;
        z-index: 1;
        background: #fff;
        padding: 50px;
        box-shadow: 0 10px 30px rgba( 0, 0, 0, .1);
      }
    </style>
@endsection
