<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home");
    }
    public function adminlogin()
    {
        return view("adminlogin");
    }
    public function about()
    {
        return view("about");
    }
    public function customerlogin()
    {
        return view("customerlogin");
    }
    public function customersignup()
    {
        return view("customersignup");
    }
    public function category()
    {
        return view("category");
    }
    public function Carpentar()
    {
        return view("carpenter");
    }
    public function ac()
    {
        return view("Ac");
    }
    public function Plumber()
    {
        return view("plumber");
    }
    public function Applience()
    {
        return view("Applience");
    }
    public function ro()
    {
        return view("ro");
    }
    public function movers()
    {
        return view("movers");
    }
    public function bookwork()
    {
        return view("bookwork");
    }
    public function Painter()
    {
        return view("Painter");
    }
    public function pestcontrol()
    {
        return view("pestcontrol");
    }
    public function drilling()
    {
        return view("drilling");
    }
    public function tubelight()
    {
        return view("tubelight");
    }
    public function book1()
    {
        return view("book1");
    }    
    public function end()
    {
        return view('endpage');
    }
    public function contact()
    {
        return view('contact');
    }
}
