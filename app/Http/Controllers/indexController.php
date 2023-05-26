<?php

namespace App\Http\Controllers;

use App\Models\addproduct;
use App\Models\register;
use App\Models\contactus;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data['result'] = addproduct::get();
        return view('index',$data);
    }
    
    public function products()
    {
        return view('products');
    }
    public function about()
    {
        $data['result']=addproduct::get();
        return view('about',$data);
    }
    
    public function gallery()
    {
        return view('gallery');
    }


    
    public function contactus()
    {
        return view('contactus');
    }
    public function contactusaction(Request $req)
    {
      $name=$req->input('name');
      $email=$req->input('email');
      $contact=$req->input('contact');
      $message=$req->input('message');
      $data = [
          'name' => $name,
          'email' => $email,
          'contact' => $contact,
          'message' => $message
      ];
      contactus::insert($data);
      return redirect('/contactus');
    }



    public function login()
    {
        return view('login');
    }
    
    public function loginaction(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $data = register::where('email', $email)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sessid' => $data->id));
            return redirect('/userindex');
        } else {
            return redirect('/login')->with('error', 'invalid username or Password');
        }
    }
    public function register()
    {
        return view('register');
    }
    public function registeraction(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $address = $req->input('address');
        $phoneno = $req->input('phoneno');
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'address' => $address,
            'phoneno' => $phoneno
        ];
        register::insert($data);
        return redirect('/register');
    }
}