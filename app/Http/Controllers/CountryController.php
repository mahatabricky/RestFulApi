<?php

namespace App\Http\Controllers;

use App\Models\Country as AppCountry;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    
    /*
      Returns all country list
    */
    public function index()
    {
        $coutries = AppCountry::paginate(2);
        
        return response()->json($coutries,200);
    }
    /*
     Save the new country
     @param mixed $Request Object
     @return json response
    */

    public function store(Request $request)
    {
    
         $countryStore =AppCountry::create(
        [   'name'=> $request->name,
            'ISO' => $request->ISO,
            'short_name' => $request->short_name,
            'code'       => $request->code, 
         ]);
        
       
        return response()->json(["Success"=>"Successfully stored country"],201);
    }
    /*
     Return single country object
     @param int $id
    */
    public function singleCountry($id)
    {
        $singleCountry = AppCountry::find($id);
        $err = "not found";
        if($singleCountry)
           return response()->json($singleCountry,200);
        else
           return response()->json(["msg"=>"Country not found"],401);            
    }
    /*
      Update Country Data
    */
}
