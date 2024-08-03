<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hiring;
use App\Models\Hiringinfo;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;

class HiringController extends Controller
{
    public function hiring(Request $request){

        $hiring = str_replace("-", " ", $request->route('id'));
        
        $hirings = Hiring::where("title",$hiring)->get();
        $Services = Service::where('status','1')->get();
        // prd($hirings);
        if($hirings->isEmpty())
        {
             return response()->view('errors.404', [], 404);
        }else{
            return view('users.hiring', ['hirings' => $hirings,'Services'=>$Services]);
        }
    
    }

    public function hiringpost(Request $request)
    {
    //     $test = request()->all();
    //     pr($test);
    // //    echo $request->file('resume');
    //    exit;

    $img= $request->file("resume");

    $filename= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/resume'),$filename);

    $pageData = ['name' => $request->name, 'email' => $request->email,'resume'=>$filename,'mobile'=>$request->mobile,'hiringfor'=>$request->hiringfor, 'created_at' => date('Y-m-d H:i:s')];

        // prd($pageData);
        Hiringinfo::create($pageData);
        $url=str_replace(' ', '-', $request->hiringfor);
        return redirect('/hiring/'.$url)->with(['message' => 'Apply Successfully!', 'status' => 'success']);
    }
}
