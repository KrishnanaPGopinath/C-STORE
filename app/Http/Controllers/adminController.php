<?php

namespace App\Http\Controllers;
use App\Models\addabout;
use App\Models\addproduct;
use App\Models\addtocart;
use App\Models\addgallery;
use App\Models\register;
use App\Models\admin;
use App\Models\card;
use App\Models\buynow;
use App\Models\contactus;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $data['result'] = addproduct::select(addproduct::raw("count(id) as no"))->get();
        $data['result1'] = addtocart::select(addtocart::raw("count(id) as no"))->get();
        $data['result2'] = register::select(register::raw("count(id) as no"))->get();
        $data['result3'] = card::select(register::raw("count(id) as no"))->get();
        return view('admin.index',$data);
    }
    public function addabout()
    {
        return view('admin.addabout');
    }
    public function adminlogin()
    {
        return view('admin.adminlogin');
    }
    public function adminloginaction(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $data = admin::where('email', $email)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sessid' => $data->id));
            return redirect('/adminindex');
        } else {
            return redirect('/adminlogin')->with('error', 'invalid username or Password');
        }
    }

    public function addaboutaction(Request $req)
    {
      $title=$req->input('title');
      $description=$req->input('description');
      $data = [
          'title' => $title,
          'description' => $description
      ];
      addabout::insert($data);
      return redirect('/addabout');
    }
    public function viewabout()
    {
        $data['about']=addabout::get();
        return view('admin.viewabout',$data);
    }

    public function editabout($id)
    {
        $data['result']=addabout::where('id',$id)->get();
        return view('admin.editabout',$data);
    }
    public function editaboutaction(Request $req,$id)
    {
        $title= $req->input('title');
        $description = $req->input('description');
            $data = [
                'title' => $title,
                'description' => $description
            ];
       
            addabout::where('id',$id)->update($data);
            return redirect('/viewabout');
    }

    public function deleteabout($id)
    {
        addabout::where('id',$id)->delete();
        return redirect('/viewabout');
    }




    
    public function addgallery()
    {
        return view('admin.addgallery');
    }


    public function addgalleryaction(Request $req)
    {
      $name=$req->input('name');
      $file=$req->file('file');
      $filename=$file->getClientOriginalName();
      $file->move(public_path().'/image',$filename);
      $data = [
          'name' => $name,
          'file'=> $filename
      ];
      addgallery::insert($data);
      return redirect('/addgallery');
    }
    public function viewgallery()
    {
        $data['result']=addgallery::get();
        return view('admin.viewgallery',$data);
    }

    public function editgallery($id)
    {
        $data['result']=addgallery::where('id',$id)->get();
        return view('admin.editgallery',$data);
    }
    
    public function editgalleryaction(Request $req,$id)
    {
        $name= $req->input('name');
        $file = $req->file('file');
        if($file == ""){
            $data = [
                'name' => $name
            ];
        }
        else{
            $filename=$file->getClientOriginalName();
            $file->move(public_path().'/image',$filename);
            $data = [
                'name' => $name,
                'file' => $filename
            ];
        }
            addgallery::where('id',$id)->update($data);
            return redirect('/viewgallery');
    }


    public function deletegallery($id)
    {
        addgallery::where('id',$id)->delete();
        return redirect('/viewgallery');
    }

    

    public function addproducts()
    {
        return view('admin.addproducts');
    }

    public function addproductsaction(Request $req)
    {
      $productname=$req->input('pname');
      $price=$req->input('pprice');
      $description=$req->input('description');
      $file=$req->file('file');
      $filename=$file->getClientOriginalName();
      $file->move(public_path().'/image',$filename);
      $data = [
          'pname' => $productname,
          'pprice' => $price,
          'description' => $description,
          'file'=> $filename
      ];
      addproduct::insert($data);
      return redirect('/addproducts');
    }
    public function viewproducts()
    {
        $data['result']=addproduct::get();
        return view('admin.viewproducts', $data);
    }
    public function editproduct($id)
    {
        $data['result']=addproduct::where('id',$id)->get();
        return view('admin.editproduct',$data);
    }
    public function editproductaction(Request $req,$id)
    {
        $pname= $req->input('pname');
        $pprice = $req->input('pprice');
        $description = $req->input('description');
        $file = $req->file('file');
        if($file == ""){
            $data = [
                'pname' => $pname,
                'pprice' => $pprice,
                'description' => $description
            ];
        }else{
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/image',$filename);
            $data = [
                'pname' => $pname,
                'pprice' => $pprice,
                'description' => $description,
                'file' => $filename
            ];
        }
            addproduct::where('id',$id)->update($data);
            return redirect('/viewproducts');
    }
    public function deleteproduct($id)
    {
        addproduct::where('id',$id)->delete();
        return redirect('/viewproducts');
    }


    public function adminmyprofile()
    {
        $data['result'] = admin::get();
        return view('admin.adminmyprofile',$data);
    }
    public function adminmyprofileaction(Request $req, $id)
    {
       
        $email = $req->input('email');
        $password = $req->input('password');

        $data = [
            'email' =>  $email,
            'password' => $password
        ];
        admin::where('id',$id)->update($data);
        return  redirect('/adminmyprofile');
    }
    public function viewenquiry()
    {
        $data['result']=contactus::get();
        return view('admin.viewenquiry',$data);
    }

    

    public function vieworders()
    {
        $data['result'] = buynow::get();
        return view('admin.vieworders',$data);
    }
   
    public function viewusers()
    {
        $data['result']=register::get();
        return view('admin.viewusers',$data);
    }


    public function logout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/logout');
    }













}
