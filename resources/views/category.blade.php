@extends('layouts.master')
@section('title','Category')
<style>
    .name{
        font-size:1.2em;
        color:darkblue;
    }
    .pname{
        font-size:1.2em;
        color: orange; 
    }
    .qname{
        font-size:1.2em;
        color: darkblue;
    }
    .dropdown {
  position: relative;
  display: inline-block;
  left: 1100px;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  color: orange;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
@section('content')
<br>
<div class="dropdown">
  <span class="pname">Hello <b class="qname">{{$x[0]->name}}</b></span>
  <div class="dropdown-content">
  <p class="pname">Your customer Id is <b class="qname">{{$x[0]->id}}</b></p>
  </div>
</div>
<h2 class="text-warning text-center">Expert Category</h2>
<h2 class="text-warning text-center"> here's our Services <b class="name">{{$x[0]->name}}</b></h2>
<br>
<div class="container">
<div class="row">
            <div class="col-sm-4">
            <img src="{{asset('images/Plumbing.jpg')}}" class="img-rounded" style="height: 200px; width: 100%;">
         <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Plumbling <br>
                know more <a href="{{url('plumber')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
            
</div>
            <div class="col-sm-4">
                <img src="{{asset('images/Homeappliance.jpg')}}" class="img-rounded" style="width: 100%; height: 200px;">
        <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Home Appliences  <br>
            know more <a href="{{url('Applience')}}"><span class="glyphicon glyphicon-arrow-right"></span></a>
        </p>
        </div>
        <div class="col-sm-4">
            <img src="{{asset('images/ro.jpg')}}" class="img-rounded" style="width: 100%; height: 200px;">
            <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> RO Services<br>
                know more <a href="{{url('ro')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
            
         </div>
    </div><br>
    <div class="row">
        <div class="col-sm-4">
            <img src="{{asset('images/packers.jpg')}}" style="width: 90%; height: 200px;">
            <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Movers And Packers<br>
                know more <a href="{{url('movers')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
        </div>
        <div class="col-sm-4">
            <img src="{{asset('images/painter.jpg')}}" style="width: 100%; height: 200px;">
            <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Painters<br>
                know more <a href="{{url('Painter')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
        </div>
        <div class="col-sm-4">
            <img src="{{asset('images/pest.jpg')}}" style="width: 100%; height: 200px;">
            <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Pest Control<br>
                know more <a href="{{url('pestcontrol')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-4">
            <img src="{{asset('images/carpenter.jpg')}}" style="width: 90%; height: 200px;">
            <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Carpentar<br>
                know more <a href="{{url('Carpentar')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
        </div>
        <div class="col-sm-4">
            <img src="{{asset('images/Acclean.jpg')}}" style="width: 100%; height: 200px;">
            <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> AC Cleaning<br>
                know more <a href="{{url('ac')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
        </div>
        <div class="col-sm-4">
            <img src="{{asset('images/drilling.jpg')}}" style="width: 100%; height: 200px;">
            <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Drilling<br>
                know more <a href="{{url('drilling')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <img src="{{asset('images/installer.jpg')}}" style="width: 100%; height: 200px;">
                <p style="color: maroon; font-size: 16px;margin-top: 3%; padding-right: 50px; "> Tubelight installiation and Repair<br>
                    know more <a href="{{url('tubelight')}}"> <span class="glyphicon glyphicon-arrow-right"></span></a>
                </p>
            </div>
        </div>
    </div>
    </div>
    @endsection