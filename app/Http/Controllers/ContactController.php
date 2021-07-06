<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        Session::put( 'activeNav' , 'contact' );
        return view( 'pages.contact' );
    }

    public function store( Request $request ){

        $contact = $request->all();

        dd($contact);

    }
}
