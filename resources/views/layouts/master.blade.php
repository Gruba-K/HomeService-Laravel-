<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   -->
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
    <div class="content">
        <div class="logobox">
            <h1 class="head"><span style="color: orange;">Home</span>  <span style="color: darkblue;">Service</span></h1>
        </div>
        <nav>
            <ul>
                <li><a href="{{url('/')}}" class="home">Home</a></li>
                <li><a href="{{url('adminlogin')}}" class="admin">Admin</a></li>
                <li><a href="{{url('customerlogin')}}" class="customer"><span class="cust">Cust</span><span class="omer">omer</span></a></li>
                <li><a href="{{url('about')}}" class="about">About <span class="us">us</span></a></li>
                <li><a href="{{url('contact')}}" class="contact">Contact <span class="con">us</span></a></li>
            </ul>
        </nav>
    </div>
    @show
    <!-- Main Content Start -->
    <div class="container-fluid" style="padding:0px;">
        @yield('content')
    </div>
<!-- Main Content End -->
   <!-- Start  Footer  -->
   @section('footer')
   <br>
   <br>
   <footer>
      <div class="container">
        <div class="col-sm-4">
            <h1 class="nov"><b>Home Services</b></h1><hr>
             <div class="row 1">
                 <div class="col-sm-12" > <span class="glyphicon glyphicon-map-marker"></span>  <b> Floor,GEM Tower<br>ThiruvanaiKovil,<br>Trichy-620015.</div>
                 <!-- <div class="col-sm-6" ><b> Floor,GEM Tower<br>Thiru   vanaiKovil,<br>Trichy-620015.</b></div> -->
             </div> <br>
             <div class="row 2">
                <div class="col-sm-12"> <span class="glyphicon glyphicon-envelope"></span> <b>homeservice@gmail.com</b></div>
                <!-- <div class="col-sm-6"><b>homeservice@gmail.com</b></div> -->
            </div>
        </div>
        <div class="col-sm-4">
            <h1 class="nov"><b>Services</b></h1><hr>
            <div class="row">
                <div class="col-sm-6">
                    <h4>Plumbling</h4>
                    <h4>Home Appliences</h4>
                    <h4>RO Services</h4>
                    <h4>Movers And Packers</h4>
                    <h4>Painters</h4>
                </div>
                <div class="col-sm-6">
                    <h4>Pest Control</h4>
                    <h4>Carpentar</h4>
                    <h4>AC Cleaning</h4>
                    <h4>Drilling</h4>
                    <h4>Tubelight installiation and Repair</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <h1 class="nov"><b>Company</b></h1><hr>
            <div class="row">
                <div class="col-sm-6">
                    <h4>About Us</h4>
                    <h4>Community</h4>
                    <h4>FAQs</h4>
                    <h4>Work Assitance</h4>
                    <h4>Terms and Conditions</h4>
                </div>
                <div class="col-sm-6">
                    <h4>Contact Us</h4>
                    <h4>Privacy Policy</h4>
                    
                </div>
            </div>
        </div>
     </div>
    </footer>
    <!-- End Footer -->
    <!-- Typed Function JavaScript Start -->
   
    @show
    <!-- Typed Function JavaScript End -->
</body>
</html>