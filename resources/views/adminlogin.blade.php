<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <style>
         body{
        background-image: url("{{asset('images/adminlogin.webp')}}");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;}  

        * {
  margin: 0;
  padding: 0;
  border-size: border-box;
}
#jan{
margin-top: 70px;
margin-left: 100px;
}
 
body {
  display: flex;
  align-items: center;
  justify-content: center;
}
#jan{
    padding-left: 250px;
}
.card {
  width: 70%;
  padding: 30px 90px 90px 90px;
  /* border: 6px solid rgba(0, 0, 0, 0.3); */
  /* box-shadow: 20px 20px 0 rgba(0, 0, 0, 0.3); */
  border-radius: 50px;
  position: relative;
}

.card h2 {
  color: rgba(0, 0, 0, 0.3);
  font-size: 60px;
  text-transform: uppercase;
}

.card .row {
  position: relative;
  width: 100%;
  display: grid;
  grid: auto / auto auto;
  grid-template-columns: repeat(auto-fit,minmax(40%, 1fr));
  grid-gap: 30px;
  /* border: 6px solid rgba(0, 0, 0, 0.3);  */
   
}

.card .row .col {
  position: relative;
  width: 100%;
  margin: 30px 20px 40px 0;
  transition: 0.5s;
}

.card .row .form-group {
  position: relative;
  width: 100%;
  height: 40px;
  color: #ffffff;
}

.card .row .form-group input,
.card .row .form-group textarea {
  position: absolute;
  width: 60%;
  height: 100%;
  background: transparent;
  outline: none;
  font-size: 24px;
  padding: 10px 0 10px 20px;
  border: 5px solid rgba(0, 0, 0, 0.3);
  box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.3);
  color:  rgb(20, 73, 48);
  border-radius: 50px;
}

.card .row .form-group label {
  line-height: 40px;
  color: #ffffff;
  font-size: 24px;
  margin: 0 0 0 30px;
  display: block;
  pointer-events: none;
}

.row .col:nth-child(6) {
  margin-top: 64px;
}

.card .row .form-group input:focus,
.card .row .form-group textarea:focus {
  border: 5px solid  rgb(20, 73, 48);
  transition: all 0.5s;
}

.card .row input[type="submit"] {
  border: 5px solid rgba(0, 0, 0, 0.3);
  /* box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.3); */
  padding: 10px;
  height: 70%;
  width: 30%;
  cursor: pointer;
  outline: none;
  background-image:linear-gradient(to right,rgb(38, 191, 238),rgb(112, 194, 53));
  text-transform: uppercase;
  color: #ffffff;
  line-height: 40px;
  font-size: 24px;
  font-weight: 700;
  border-radius: 45px;
  transition: all 0.4s;
  position:relative;
  top:-60px;
  right:-40px;
}

.card .row input[type="submit"]:hover {
  border: 5px solid rgb(20, 73, 48);
  color:  rgb(20, 73, 48);
  transition: all 0.4s;
}

@media screen and (max-width: 900px) {
  .card .row {
    grid-template-columns: repeat(auto-fit,minmax(70%, 1fr));
  }
  
  .card {
    padding: 20px;
  }
  
  .card h2 {
    font-size: 34px;
  }
  
  .card .row input[type="submit"] {
    width: 100%;
  }
}
/* newstyless */
#emailadmin
{
  position:absolute;
  top:100px;
  right:-270px;


}
#passadmin
{
  position:absolute;
  top:250px;
  right:170px;
}
.border{
    width:30%;
    height: 400px;
    border: 5px solid rgb(90, 87, 87);
    box-shadow: 20px 20px 0 rgba(0, 0, 0, 0.3);
   border-radius: 50px;
   position: absolute;
   top:120px;
   z-index:-1;
   
}
.texterror
{
  color:darkgreen;
}
</style>
</head>
<body>
<div class="card" id="feb">
    <!-- <h2>ADMIN LOGIN</h2> -->
    @if($errors->any())

    <center>
  <h1 class="texterror">{{$errors->first()}}</h1>
  </center>
@endif
<form action="{{url('adminlogin')}}" method="post">
  @csrf
    <div class="row" >
        <div class="col" style= "height:300px;">
            <div class="form-group" id="emailadmin">
              <!-- <label style="color: black;"><b>EMAIL</b></label> -->
              <input type="email" name="email" placeholder="Enter Your Email">
            </div>
          </div> 
       
      <div class="col">
        <div class="form-group" id="passadmin">
          <!-- <label style="color: black;"><b>PASSWORD</b></label> -->
          <input type="password" name="password" placeholder="Enter Your Password">
        </div>
      </div>
  
  
      <div class="col" id="jan" id="jan" >
        <input type="submit" value="submit" placeholder="" style="padding-bottom:30px;">
      </div>
    </div>
  </div>
</form>
<div class="border">

</div>
</body>
</html>