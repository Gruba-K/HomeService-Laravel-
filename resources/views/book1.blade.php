@extends('layouts.master')
@section('title','book')
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


/* h1 {
  font-size: 2rem;
  font-family: 'Merriweather', serif;
  text-transform: uppercase;
} */

/* h1, p {
  margin: 1em auto;
  text-align: center;
} */

form {
  width: 60%;
	max-width: 600px;
	min-width: 300px;
	margin: 0 auto;
  padding-bottom: 2em;
  box-shadow: 4px 4px 4px 4px grey;
  padding-left: 50px;
}

label#inp{
  font-size: 1.5rem;
  font-weight: bold;
  display: inline;
	margin: 0.5rem 1.5em 0.5em;
 

}
label{
  font-size: 1.5rem;
  font-weight: bold;
  display: inline;
	margin: 0.5rem 0;
}


.inline {
  width: unset;
  margin: 0 0.5em 0 0;
  vertical-align: middle;
}

input,
textarea,
select {
  margin: 7px 0 0 15px;
	width: 50%;
  min-height: 2em;
  border-bottom:2px solid black;
}

select {           
			position: relative;
      border-radius: 5px;
      display: inline-block;
		}

input, textarea {
  border-radius: 5px;
  color: rgba(10, 10, 35, 0.7);
}

input[type="submit"] {
  display: block;
  width: 60%;
  margin: 1em auto;
  height: 2em;
  font-size: 9rem;
  background-color: #3b3b4f;
  border-color: white;
  min-width: 300px;
  color: inherit;
}

</style>
@section('content')
    <br>
    <p class="text-primary text-center">Please fill out this form with the required information</p>
    <form action="{{url('bookreq')}}" method="post">
      @csrf
      <br>
        <label id="inp">Name </label>
        <input type="text" style="margin-left:55px;" name="firstname" required />
        <br><br>
      <label id="inp">Phone Number</label>
      <input type="text" name="phone" required/>
      <br><br>
        <label id="inp">Custamer-Id</label>
        <input type="text" name="cusid" required /><br><br>
        
        <div class="row">
          <label>WORK TYPE</label>
          <div class="col-sm-6">
            <label><input type="radio" name="work" value="Plumbling" class="inline" /> Plumbling</label>
            <label><input type="radio" name="work" value="Home Appliences" class="inline" />Home Appliences</label>
            <label><input type="radio"  name="work" value=" RO Services" class="inline" /> RO Services</label>
            <label><input type="radio"   name="work" value="Movers And Packers" class="inline" />Movers And Packers</label>
            <label><input type="radio"  name="work" value="Painters" class="inline" />Painters</label>
          </div>
          <div class="col-sm-6">
            <label><input type="radio"  name="work" value="Pest Control" class="inline" />Pest Control</label>
            <label><input type="radio" name="work"  value="Carpentar" class="inline" />Carpentar</label>
            <label><input type="radio"  name="work" value="AC Cleaning" class="inline" />AC Cleaning</label>
            <label><input type="radio"  name="work" value="Drilling" class="inline" />Drilling</label>
            <label><input type="radio"  name="work" value="Tubelight installiation" class="inline" />Tubelight installiation</label>
          </div>
        </div>
        </label><br>
        <label>Additional Requests
        <textarea  name="additional"style="width: 90%; border:2px solid black;" rows="5" cols="30" placeholder="Your message ..."></textarea>
        </label><br><br>
      <button style="margin-left: 130px; width: 30%; height:40px; background-color:darkblue;color: white; border-radius: 6px;"><b>Submit</b></button>
    </form>
<script>
  // $(document).ready(function(){

  // });
</script>
@endsection
    <!-- <h1>Booking Online Now</h1> -->
   
 