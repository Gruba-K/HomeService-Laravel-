@extends('layouts.master')
@section('title','Transaction')
<style>
    em > b
    {
        font-size:1.6em;
    }

    .payment
    {
        display:none;
    }
    .card{
    margin: auto;
    box-shadow: 6px 6px 6px 6px grey;
    margin-top: 50px;
}
.img{
    text-align: center;
}
button{
    box-shadow: 6px 6px 6px 6px grey;
}
</style>
@section("content")
<br>
<center>
<div class="loading">
    <em class="text-info"><b class="multitxt"></b></em>
</div>
</center>
<div class="payment">
<div class="card" style="width:430px ;border: 2px solid black; height: 400px;">
        <div class="card-body">
            <h1 style="text-align: center;">Payment Details</h1>
            <div class="img">
              <img src="https://thumbs.dreamstime.com/b/pound-sterling-hand-payment-blue-icon-use-designing-developing-websites-commercial-print-media-web-any-type-design-212578669.jpg" alt="pic" style="width:40%; height: 160px;">
            </div><br>
            <div class="row">
             <div class="col-sm-6">
                <h5>Payment type</h5>    
                <h5>Mobile</h5>  
                <h5>Email</h5>  
                <h5>Amount to be paid</h5>  
             </div>
             <div class="col-sm-6" style="text-align: right;padding-right: 20px;">
                <h5>Cash</h5>
                <h5>9988776655</h5>
                <h5>prawin@gmail.com</h5>
                <h5>500</h5>
                
             </div>
           </div>
        </div>
      </div>
    <a href="{{url('end')}}" style="width: 31%; border-radius: 8px; background-color:blue; color: white;margin-left: 470px; margin-top:30px; height:50px" class="btn btn-primary"><b>Submit</b></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    $(document).ready(function()
    {
        alert("request is sent to admin. Please wait for the response");
        var typingEffect = new Typed(".multitxt",{
            strings : ["please wait while the request is been processing"],
            loop: true,
            typeSpeed: 80,
            backSpeed: 100,
            backDelay: 1500
        })
        setTimeout(() => {
            $(".loading").fadeOut();
            $(".payment").fadeIn();
            
        },8000);


        
    });
</script>
@endsection