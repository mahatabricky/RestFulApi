<?php

namespace App\Http\Controllers;

use App\Models\Country as AppCountry;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $coutries = AppCountry::all();
        return response()->json($coutries,200);
    }

    public function store(Request $request)
    {
        $countryStore =AppCountry::create[$request->all];
        return response()->json("Successfully sotred country",201);
    }
    public function singleCountry($id)
    {
        $singleCountry = AppCountry::find($id);
        $err = "not found";
        if($singleCountry)
           return response()->json($singleCountry,200);
        
    }
}
