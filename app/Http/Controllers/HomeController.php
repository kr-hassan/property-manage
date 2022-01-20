<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $latest_properties= Property::latest()->get();
//        dd($latest_properties);
        return view('welcome', compact('latest_properties'));
    }
}
