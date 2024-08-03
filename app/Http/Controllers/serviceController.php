<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index(Request $Request)
    {

        $Service = str_replace("-", " ", $Request->route('id'));
        
        $Services = Service::where("title",$Service)->get();
        $Servicess = Service::all();

        // prd($Services);
        // exit();
        if($Services->isEmpty())
        {
             return response()->view('errors.404', [], 404);
        }else{
            return view('users.services', ['Services' => $Services,'Servicess'=>$Servicess]);
        }
    }
}
