<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Singleaction extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('about');
        return view('why');
    }

   
}
