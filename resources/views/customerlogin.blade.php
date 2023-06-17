<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer login</title>
    <style>
         body{
        /* background-image: url(data:image/jpeg;base64,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);   */
        /* background-image: url(https://www.dealsshutter.com/blog/wp-content/uploads/2020/03/homeservice-1536x681.jpg); */
       background-image: url("{{asset('images/customerlogin.png')}}");

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
  background-image:linear-gradient(to right,rgb(0, 195, 255),rgb(218, 161, 56));
  text-transform: uppercase;
  color: #ffffff;
  line-height: 40px;
  font-size: 24px;
  font-weight: 700;
  border-radius: 45px;
  transition: all 0.4s;
  position:relative;
  top:-320px;
  right:-7px;
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
  top:30px;
  left:-165px;

}
#passadmin
{
  position:absolute;
  top:30px;
  right:-310px;
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
<form action="{{url('customerlogin')}}" method="post">
    @csrf
    <div class="row">
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

</body>


</html>