<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{

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
