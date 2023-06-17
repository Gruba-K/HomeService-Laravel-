@extends('layouts.master')
@section('tile','AdminHome')
<style>
    .end{
    background-image:url('{{asset("images/home2.jpg")}}');
    background-size:cover;
    background-attachment:fixed;
    background-repeat:no-repeat;
    height:500px;
}
h1.conti
{
background-image:linear-gradient(to right,black,grey,white);
color:white;
}
</style>
@section('content')
<br>
<div class="container-fluid end">
<br><br><br><br><br><br>
<h1 class="conti">Welcome Admin>>!!<br><br>Click the  customer button to view customer details.</h1>
<br><br>
<center>
<a href="{{url('adcuslist')}}" class="btn btn-primary">Customers</a>
</center>
        

</div>

@endsection