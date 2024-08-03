<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\industry;
use Illuminate\Support\Facades\Storage;

class IndustryController extends Controller
{
    public function index() {
        $industrys = Industry::where('status','1')->get();
        return view('admin.industry.index', ['industrys' => $industrys]);
      }

      public function create() {
        return view('admin.industry.create');
      }

      public function store(Request $request) {
  

        // $imageName = time() . '.' . $request->file->extension();
        // $request->file->storeAs('public/banners', $imageName);
    
        $img = $request->file;
        $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
        $file_type=$img->getClientMimeType();
        $img->move(public_path('storage/industry'),$imageName);
    
    
    
        $postdate = ['title' => $request->title, 'description' => $request->description,'status' => $request->status,'status' => $request->status, 'image' => $imageName, 'created_at' => date('Y-m-d H:i:s')];
        // prd($postdate); 
        industry::create($postdate);
        return redirect('/admin/industry')->with(['message' => 'industry added successfully!', 'status' => 'success']);
        
      }



      public function edit(industry $industry) {
        return view('admin.industry.edit', ['industry' => $industry]);
      }



      public function update(Request $request, industry $industry) {
        $imageName = '';
        if ($request->hasFile('file')) {
    
          $img = $request->file;
          $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
          $file_type=$img->getClientMimeType();
          $img->move(public_path('storage/industry'),$imageName);
    
          if ($industry->image) {
            
            Storage::delete(public_path('storage/industry'), $industry->image);
          }
        } else {
          $imageName = $industry->image;
        }
    
    
        $postdate = ['title' => $request->title, 'description' => $request->description,'status' => $request->status,'status' => $request->status, 'image' => $imageName, 'created_at' => date('Y-m-d H:i:s')];
        // prd($postdate); 
       
         $industry->update($postdate);
        return redirect('/admin/industry')->with(['message' => 'industry updated successfully!', 'status' => 'success']);
      }



      public function destroy(industry $industry) {
        Storage::delete(public_path('storage/industry') , $industry->image);
        $industry->delete();
        return redirect('/admin/industry')->with(['message' => 'industry deleted successfully!', 'status' => 'info']);
      }
    
}
