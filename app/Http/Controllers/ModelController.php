<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ModelController extends Controller

{
    
    public function customerlogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
        $email=$request->input('email');
        $password=$request->input('password');  
        // $x=Auth::attempt(['email'=>$email,'password'=>$password]);
        $x=DB::select("select * from customer where email='$email' and password='$password' limit 1");
        if($x)
        {
            $request->session()->regenerate();
            return view("category",['x'=>$x]);
        }
        else{
            
            // dd($msg);
            return back()->withErrors(['msg' => 'Invalid username or Password']);
        }
        // if(Auth::attempt(array('email' => $email, 'password' => $password)))
        // {
        //     return "user is available";
        // }
        // else{
        //     return "user is'nt available";
        // }
    }
    public function adminlogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
        $email=$request->input('email');
        $password=$request->input('password');  
        // $x=Auth::attempt(['email'=>$email,'password'=>$password]);
        $x=DB::select("select * from customer where email='$email' and password='$password' limit 1");
        if($x)
        {
            $request->session()->regenerate();
            
            return view("adminhome");
        }
        else{
            return back()->withErrors(['msg' => 'Invalid username or Password']);;
        }
    }
    public function adcuslist()
    {
        $y=DB::table('customer')->get();
        return view("adminlanding",['y'=>$y]);
    }
    public function cussignup(Request $request)
    {
        $request->validate(['email'=>'required',
        'name'=>'required',
        'password'=>'required',
        'mobile'=>'required',
        'address'=>'required']);
        
        $customer=new customer;
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->password=$request->password;
        $customer->mobile=$request->mobile;
        $customer->address=$request->address;
        $customer->save();
        return view("customerlogin");
    }
    public function bookreq(Request $request)
    {
        $customer=new customer;
        $affected=DB::update("update customer set worktype='$request->work',additionalquery='$request->additional',request='requested' where id='$request->cusid'");
        $y=DB::table('customer')->get();
        return view("bookland",['y'=>$y]);
    }

    public function accept($id)
    {
        $affect=DB::update("update customer set request='accepted' where id='$id'");
        return back();
    }
    public function decline($id)
    {
        $affect=DB::update("update customer set request='null' where id='$id'");
        return back();
    }
}