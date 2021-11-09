<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
     return view('font.home');
    }

    public function w_product(){
        return view('font.layout.w-product');
       }

    public function m_product(){
        return view('font.layout.m-product');
       }

    public function mail_us(){
        return view('font.layout.mail');
       }

    public function web_code(){
        return view('font.layout.codes');
       }

    public function single(){
        return view('font.layout.single');
       }

    public function checkout(){
        return view('font.layout.checkout');
       }

    public function login(){
        return view('login');
       }

    public function register(){
        return view('register');
       }
}
