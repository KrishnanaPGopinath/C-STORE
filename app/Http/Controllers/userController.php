<?php

namespace App\Http\Controllers;

use App\Models\addproduct;
use App\Models\register;
use App\Models\addtocart;
use App\Models\buynow;
use App\Models\card;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $data['result'] = addproduct::get();
        return view('user.index', $data);
    }

    public function products()
    {
        $data['result'] = addproduct::get();
        return view('user.products', $data);
    }



    public function myprofile()
    {
        $id = session('sessid');
        $data['result'] = register::where('id', $id)->get();
        return view('user.myprofile', $data);
    }
    public function myprofileaction(Request $req, $id)
    {
        $id = session('sessid');
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $address = $req->input('address');
        $phoneno = $req->input('phoneno');

        $data = [
            'name' => $name,
            'email' =>  $email,
            'password' => $password,
            'address' => $address,
            'phoneno' =>  $phoneno
        ];
        register::where('id', $id)->update($data);
        return  redirect('/myprofile');
    }

    public function addtocart($id)
    {

        $data['result'] = addproduct::where('id', $id)->get();
        return view('user.addtocart', $data);
    }

    public function addtocartaction(Request $req, $id)
    {
        $userid = session('sessid');
        $productid = $req->input('id');
        $quantity = $req->input('quantity');
        $totalamount = $req->input('totalamount');
        $data = [
            'productid' => $id,
            'totalamount' => $totalamount,
            'quantity' => $quantity,
            'userid' => $userid
        ];
        addtocart::insert($data);
        return redirect('/viewcart');
    }


    public function viewcart()
    {
        $userid = session('sessid');
        $data['result'] = addproduct::join('addtocarts', 'addtocarts.productid', '=', 'addproducts.id')
            ->where('addtocarts.userid', $userid)
            ->where('addtocarts.status', "cart")
            ->select(
                'addproducts.pname',
                'addproducts.file',
                'addproducts.pprice',
                'addtocarts.id',
                'addtocarts.totalamount',
                'addtocarts.quantity'
            )->get();
        $data['sum'] = addtocart::select(addtocart::raw("SUM(totalamount) as total"))
            ->where('addtocarts.userid', $userid)
            ->where('addtocarts.status', "cart")->get();
        return view('user.viewcart', $data);
    }
    public function updatecart(Request $req)
    {
        $totalamount = $req->input('total');
        $quantity = $req->input('quantity');
        $id = $req->input('id');
        $data = ['totalamount' => $totalamount, 'quantity' => $quantity];
        addtocart::where('id', $id)
            ->update($data);
    }

    public function delete($id)
    {
        addtocart::where('id', $id)->delete();
        return redirect('/viewcart');
    }

    public function buynow()
    {
        $userid = session('sessid');
        $data['result'] = addproduct::join('addtocarts', 'addtocarts.productid', '=', 'addproducts.id')
            ->where('addtocarts.userid', $userid)
            ->where('addtocarts.status', "cart")
            ->select(
                'addproducts.pname',
                'addproducts.file',
                'addproducts.pprice',
                'addtocarts.id',
                'addtocarts.totalamount',
                'addtocarts.quantity'
            )->get();
        $data['sum'] = addtocart::select(addtocart::raw("SUM(totalamount) as total"))
            ->where('addtocarts.userid', $userid)
            ->where('addtocarts.status', "cart")->get();
        return view('user.buynow', $data);
    }


    public function buynowaction(Request $req)
    {
        $userid = session('sessid');
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $address = $req->input('address');
        $city = $req->input('city');
        $state = $req->input('state');
        $pincode = $req->input('pincode');
        $method = $req->input('method');
        $totalamount = $req->input('totalamount');
        $data = [
            'userid' => $userid,
            'fname' => $fname,
            'lname' => $lname,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'pincode' => $pincode,
            'method' => $method,
            'totalamount' => $totalamount
        ];
        buynow::insert($data);
        $cart = ['status' => "order"];
        addtocart::where('userid', $userid)->update($cart);
        if ($method == "onlinepayment") {
            return redirect('/cardpayment');
        } else {
            return redirect('/placeorder');
        }
    }
    public function placeorder()
    {
        return view('user.placeorder');
    }
    public function cardpayment()
    {
        $id = session('sessid');
        $data['result'] = buynow::where('id', $id)->get();
        return view('user.cardpayment', $data);
    }
    public function cardpaymentaction(Request $req)
    {
        $userid = session('sessid');
        $name = $req->input('name');
        $cardnumber = $req->input('cardnumber');
        $exp = $req->input('exp');
        $cvv = $req->input('cvv');
        $data = [
            'userid' => $userid,
            'name' => $name,
            'cardnumber' => $cardnumber,
            'exp' => $exp,
            'cvv' => $cvv
        ];
        card::insert($data);
        $notpaid = ['status' => "paid"];
        buynow::where('userid', $userid)->update($notpaid);
        return redirect('/vieworder');
    }
    public function vieworder()
    {
        
        $userid = session('sessid');
        $data['result'] = addproduct::join('addtocarts','addtocarts.productid', '=', 'addproducts.id')
            ->where('addtocarts.userid', $userid)
            ->where('addtocarts.status', "order")
            ->select(
                'addproducts.pname',
                'addproducts.file',
                'addproducts.pprice',
                'addtocarts.totalamount',
                'addtocarts.quantity'
            )->get();
            // print_r($data);
            // exit();
        return view('user.vieworder',$data);
    }



    
    public function logout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/logout');
    }







    }

 