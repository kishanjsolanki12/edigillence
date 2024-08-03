<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\Service;

class ContactController extends Controller
{
    public function index()
    {
        $Services =Service::where('status','1')->get();
        
        return view('users.contact-us', ['Services'=>$Services]);
            //  return view('users.contact-us');

    }
    public function contactpost(Request $request)
    {
        $pageData = ['fname' => $request->fname, 'email' => $request->email,'message'=>$request->message, 'created_at' => date('Y-m-d H:i:s')];

        // prd($pageData);
        contactus::create($pageData);
        return redirect('/contact-us')->with(['message' => 'Details added successfully!', 'status' => 'success']);
    }
}
