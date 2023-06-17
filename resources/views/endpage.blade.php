@extends('layouts.master')
@section('title','Thankyou')
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
<div class="container-fluid end">
    <br><br><br><br><br><br>
<h1 class="conti">Thank you for doing business with us.<br> For Further Queries contact ph:9087566342</h1>
<br><br>
<a href="{{url('/')}}" class="btn btn-primary">Go Back</a>
</div>
@endsection