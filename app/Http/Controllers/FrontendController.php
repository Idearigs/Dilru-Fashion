<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index() {

        return view('User.index');
    }


    public function ProductDetails(){
        return view('User.Product-Details');


    }

    public function CheckoutPage(){

        return view('user.checkout-page');

    }


    public function AboutUs(){
        return view('User.AboutUs');

    }

    public function ContactUs(){

        return view('User.ContactUs');

    }

    public function Cart(){

        return view('User.cart');

    }
}

