<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Admin Landing page</title>
    <style>
      table{
        border: 5px inset;

      }
    </style>
</head>
<body>
    <div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.63);">
<img src="{{asset('images/neww logo.png')}}" alt="" style="margin-left: 35%;">
    </div>
    <div class="container-fluid mt-3">
                
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile Number</th>
              <th>Work Type</th>
              <th>Additional Requirement</th>
              <th>Address</th>
              <th>created_time</th>
              <th>Request</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
           @foreach($y as $i)
          
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->name}}</td>
                <td>{{$i->email}}</td>
                <td>{{$i->mobile}}</td>
                <td>{{$i->worktype}}</td>
                <td>{{$i->additionalquery}}</td>
                <td>{{$i->address}}</td>
                <td>{{$i->created_at}}</td>
                <td>{{$i->request}}</td>
                <td><a href="{{url('accept')}}/{{$i->id}}" class="bg-success" onclick="alert('Admin Accepted the request');" style="color: whitesmoke;">Accept</a>
                    <a href="{{url('decline')}}/{{$i->id}}" class="bg-danger" onclick="alert('Admin Declined the request');"style="color: whitesmoke;">Denied</a></td>
            </tr>
           @endforeach
          </tbody>
        </table>
        <a href="{{url('/')}}" class="btn btn-primary">Go Back</a>
        <br><br>
      </div>
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
      
</body>
</html>