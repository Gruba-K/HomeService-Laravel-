@extends('layouts.master')
@section('title','about')
@section('content')
<style>
    .contabt{
        background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("{{asset('images/bg.jpg')}}");

        background-repeat:no-repeat;
        background-size:cover;
        height:550px;
    }
    .rdown{
        position:absolute;
        top:400px;
        left:250px;
    }
</style>
<div class="container contabt">
    <div class="row rdown">
        <div class="col-sm-3">
         <div class="gly">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
         </div>
         <h1 style="text-align: center; color: orange">100+</h1>
         <h3 class="service" style="text-align: center; color: darkblue; text-shadow: 1px 0px;"> Service Providers</h3>
        </div>
        
        <div class="col-sm-3">
         <div class="gly">
         <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-megaphone" viewBox="0 0 16 16">
                <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
              </svg>
         </div>
         <h1 style="text-align: center; color: orange">200+</h1>
         <h3 class="service" style="text-align: center; color: darkblue; text-shadow: 1px 0px;"> Sucessful Jobs</h3>
        </div>
        
        <div class="col-sm-3">
         <div class="gly">
         <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
            </svg>
         </div>
         <h1 style="text-align: center; color: orange">150+</h1>
         <h3 class="service" style="text-align: center; color: darkblue; text-shadow: 1px 0px;"> Happy Customers</h3>
        </div>
       
        <div class="col-sm-3">
         <div class="gly">
         
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
         </div>
         <h1 style="text-align: center; color: orange">180+</h1>
         <h3 class="service" style="text-align: center; color: darkblue; text-shadow: 1px 0px;">Free lancers</h3>
        </div>
</div>

        
</div>

@endsection