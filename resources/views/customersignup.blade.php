@extends("layouts.master")
@section('title','SignupPage')

<!-- <br>
<br>
<form action="{{url('cussignup')}}" method="post">
    name:<input type="text" name="name"><br>
    email:<input type="email" name="email"><br>
    password:<input type="password" name="password"><br>
    mobile:<input type="text" name="mobile"><br>
    address:<input type="text" name="address"><br>
    <button>submit</button>
    @csrf
</form> -->
<style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans&display=swap');

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  width: 100%;
  height: auto;
  margin: 0;
            background-repeat: no-repeat;
			background-size: cover;
            background-attachment: fixed;
          	font-family: 'Open Sans', sans-serif;
			font-size: 1.2rem;
			line-height: 1.618;
			color: black; 
      overflow-x: hidden;
		}

form {
  width: 60vw;
	max-width: 300px;
	min-width: 300px;
	margin: 0 auto;
  padding-bottom: 2em;
  box-shadow: 4px 4px 4px 4px grey;
  padding-left: 50px;
  margin-top:50px
}

fieldset {
  border: none;
  padding: 1.2rem 0;
  
}
label {
  font-size: 1.8rem;
  font-weight: bold;
  display: block;
	margin: 0.5rem 0;
}

.inline {
  width: unset;
  margin: 0 0.5em 0 0;
  vertical-align: middle;
}

input {
  margin: 7px 0 0 15px;
	width: 100%;
  min-height: 2em;
}



input {
  border: none;
  border-radius: 5px;
  color: rgba(10, 10, 35, 0.7);
}


 </style>  
 @section('content')
    <!-- <p>Please fill out this form with the required information</p> -->
    <form action="{{url('cussignup')}}" method="post">
      @csrf
      <fieldset>
        <label>Name 
          <input type="text" name="name" required style="width: 90%; border:2px solid black;"/></label>
        <label>Email
        <input type="email" name="email" required style="width: 90%; border:2px  solid black;"/>
        </label>
        <label> Password
            <input type="password" name="password" required style="width: 90%; border:2px  solid black;"/>
        </label>
        <label> Mobile Number
            <input type="text" name="mobile" required style="width: 90%; border:2px  solid black;"/>
        </label>  
        <label> Address
            <input type="text" name="address" required style="width: 90%; border:2px  solid black;"/>
       </label>  
                
        </label><br>
      </fieldset>
      <button style="margin-left: 130px; width: 30%; background-color:darkblue;color: white; border-radius: 6px;"><b>Submit</b></button>
    </form>

@endsection