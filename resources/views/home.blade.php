@extends('layouts.master')
@section('title','homeServices')
<style>
    .wrapper{
    display: flex;
    align-items: center;
    justify-content: center; 
    background-color:white;
    position: relative;
    font-weight:bolder ;
    font-family: cursive,serif;
    margin-top: 0px;
    background:linear-gradient(to right,orange,white,orange);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 550px;
    padding-top:200px;
    padding-bottom:200px;
    
}
.wrapper h2{
    font-size: 30px;
    font-weight: 600;
    position: absolute;
    left:300px;

}
.txt{
    font-size: 20px;
    position: absolute;
    top: 70px;
}
.txt2{
    font-size: 25px;
    position: absolute;
    top: 100px;
    color: orange;
    font-weight: 500;
}
.exp{
    position: absolute;
    top: 150px;
    left: 500px;
    outline: none;
    font-size: 30px;
    font-weight: 300;
    border: none;
    cursor: pointer;
    color: orange;
    background-color:darkblue;
    margin: 5px;
    letter-spacing: 2px;
    text-transform: capitalize;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.863);
    border-radius: 8px;
    width: 15%;
}
.cols1{
    position: relative;
    left: 100px;

}

.cols1 h3{
    position: absolute;
    left: -495px;
    bottom: -130px;
    font-size: 40px;
    font-weight: 800;
    color: darkblue;
}
.cols2{
    position: absolute;
    right: 50px;
    top:250px;
}
</style>
@section('content')
<div class="wrapper">

        <h2> Best Home Services</h2>
        <p class="txt">Continuous improvement is better than delayed perfection </p>
        <p class="txt2"> Home Maintenance and <span style="color: darkblue;"> Services for you </span><b style="font-weight: 700; font-size: 20px;"> ... </b></p>
        <form action="{{url('customersignup')}}">
            <button class="exp"> Explore</button>
        </form>
        <div class="cols1">
            
            <h3 >You Want <Span class="multitext" style="color: orange;"></Span></h3>
        </div>
        <div class="cols2">
            <img src="" alt="" id="image" style="transition:0.5s;" height="280px" width="550px">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typingEffect = new Typed(".multitext",{
            strings : ["Plumber","Electrician","Carpenter","Painter"],
            loop: true,
            typeSpeed: 80,
            backSpeed: 100,
            backDelay: 1500
        })
        let image = document.getElementById("image") ;
        let images = ["{{asset('images/home1.jpg')}}","{{asset('images/home2.jpg')}}","{{asset('images/home3.jpg')}}","{{asset('images/home4.jpg')}}","{{asset('images/home5.jpg')}}"]
        setInterval(function(){
            let random = Math.floor(Math.random() * 5);
            image.src = images[random];

        },800);
    </script>
    @endsection