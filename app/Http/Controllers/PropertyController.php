<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id)
    {
        $property = Property::findOrFail($id);
        dd($property);
        return view('',compact('property'));

    }
}
