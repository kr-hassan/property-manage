<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function single($id)
    {
        $property = Property::findOrFail($id);
//        dd($property);
        return view('property.single', compact('property'));

    }

    public function index(Request $request)
    {
        dd($request->all());
        $latest_properties = Property::latest();

        if (!empty($request->sale)) {
            $latest_properties = $latest_properties->where('sale', $request->sale);
        }
        if (!empty($request->bedrooms)) {
            $latest_properties = $latest_properties->where('sale', $request->sale);
        }
        if (!empty($request->type)) {
            $latest_properties = $latest_properties->where('type', $request->type);
        }
        $latest_properties = $latest_properties->paginate(12);

        return view('property.index', compact('latest_properties'));

    }

}
