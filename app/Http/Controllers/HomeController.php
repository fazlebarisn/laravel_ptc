<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
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
}
