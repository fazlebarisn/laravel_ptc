<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{

    public function index(){

        Session::put( 'activeNav' , 'home' );

      $data = [
          'title' => 'Home',
          'content' => '<h1>Home page contant</h1>',
          'teams' => ['Team A' , 'Team B' , 'Team C', 'Team D'],
      ];

        return view( 'pages.home' , $data );
    }

    public function about(){

        Session::put( 'activeNav' , 'about' );
        return view( 'pages.about' );
    }

    public function contact(){

        Session::put( 'activeNav' , 'contact' );
        return view( 'pages.contact' );
    }

    public function store( Request $request ){

        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'city'=> 'required',
            'district'=> 'required',
        ],[
            'first_name.required' => 'Give your first name',
            'last_name.required' => 'Give your Last name',
            'city.required' => 'Give your city name',
            'district.required' => 'Give your district name',
        ]);
    }
}
