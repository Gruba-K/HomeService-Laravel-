@extends('layouts.master')
@section('title','Booking')
@section('content')
<p>Please fill out this form with the required information</p>
    <form action="",method="post">
      
      <fieldset>
        <label>Name 
          <input type="text" name="name" required style="width: 90%; border:2px solid black;"/></label>
        <label>Phone Number 
        <input type="text" name="mobile" required style="width: 90%; border:2px solid black;"/>
        </label>
         </fieldset>
      <fieldset>
        <div class="row">
          <label>WORK TYPE</label>
          <div class="col-sm-6">
            <label><input type="radio" name="plumbing" value="Plumbling" class="inline" /> Plumbling</label>
            <label><input type="radio" name="homeapplience" value="Home Appliences" class="inline" />Home Appliences</label>
            <label><input type="radio"  name="roservice" value=" RO Services" class="inline" /> RO Services</label>
            <label><input type="radio"   name="movers" value="Movers And Packers" class="inline" />Movers And Packers</label>
            <label><input type="radio"  name="painters" value="Painters" class="inline" />Painters</label>
          </div>
          <div class="col-sm-6">
            <label><input type="radio"  name="pest" value="Pest Control" class="inline" />Pest Control</label>
            <label><input type="radio" name="carpentar"  value="Carpentar" class="inline" />Carpentar</label>
            <label><input type="radio"  name="cleaning" value="AC Cleaning" class="inline" />AC Cleaning</label>
            <label><input type="radio"  name="drilling" value="Drilling" class="inline" />Drilling</label>
            <label><input type="radio"  name="tubelight" value="Tubelight installiation" class="inline" />Tubelight installiation</label>
          </div>
        </div>        
        </label><br>
        <label>Additional Requests
        <textarea  name="additional"style="width: 90%; border:2px solid black;" rows="5" cols="30" placeholder="Your message ..."></textarea>
        </label>
      </fieldset>
      <button style="margin-left: 130px; width: 30%; background-color:darkblue;color: white; border-radius: 6px;"><b>Submit</b></button>
    </form>
@endsection