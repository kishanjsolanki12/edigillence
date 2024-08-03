<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Service;
use App\Models\servicesdata;

use DB;
use Hash;

class ServiceController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $services = Service::orderBy('id', 'desc')->paginate(50);
    return view('admin.services.index', ['services' => $services]);
  }

  function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $per_page = $request->get('per_page');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $services =     Service::                        
                        where('title', 'like', '%'.$query.'%')
                        ->orWhere('description', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.services.service_pagination_data', compact('services'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('admin.services.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    
      $request->validate([
        'title' => 'required',
        'status' => 'required',
      ]);
    
      if ($request->hasFile('service_logo')) {
        $img = $request->service_logo;
        $service_logo= time().'_'.rand().'.'.$img->getClientOriginalExtension();
        $file_type=$img->getClientMimeType();
        $img->move(public_path('storage/services'),$service_logo);
      } else {
        $service_logo = '';
      }

      if ($request->hasFile('service_image')) {
        $img = $request->service_image;
        $service_image= time().'_'.rand().'.'.$img->getClientOriginalExtension();
        $file_type=$img->getClientMimeType();
        $img->move(public_path('storage/services'),$service_image);
      } else {
        $service_image = '';
      }

     
   
    //   return $multidata;

    // prd($formData);

    $serviceData = ['title' => $request->title, 'description' => $request->description, 'service_logo' => $service_logo, 'service_image' => $service_image, 'status' => $request->status, 'created_at' => date('Y-m-d H:i:s')];

    Service::create($serviceData);

    $data = $request->all();
    $formDataArray = [];

    $service=Service::where("title",$request->title)->first();
    $service_id=$service->id;
    // prd($service_id);

    foreach ($data as $key => $value) {
      if (preg_match('/field_/', $key)) {
          $index = explode('_', $key)[1];
          $formDataArray[] = [
              'data' => $data['field_' . $index],
          ];
      }
  }
  $multidata = [];
  foreach ($formDataArray as $index => $formData) {
        $multidata[] =['service_id'=>$service_id,'data'=>$formData];
    }

    foreach ($formDataArray as $formData) {
      $formData['service_id'] = $service_id;
      $formData['created_at'] = date('Y-m-d H:i:s');
      servicesdata::create($formData);
  }
  
    return redirect('/admin/services')->with(['message' => 'Service added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsService  $service
   * @return IlluminateHttpResponse
   */
  public function show(Service $service) {
    return view('admin.services.show', ['service' => $service]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsService  $service
   * @return IlluminateHttpResponse
   */
  public function edit(Request $request,Service $service) {
    
    $service_data=servicesdata::where("service_id",$service->id)->get();
    // return $service_data;
    return view('admin.services.edit', ['service' => $service,"service_data"=>$service_data]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsService  $service
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Service $service) {
    $service_logo = '';
    if ($request->hasFile('service_logo')) {
     
      $img = $request->service_logo;
      $service_logo= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/services'),$service_logo);

      if ($service->service_logo) {
        Storage::delete(public_path('storage/services') . $service->service_logo);
      }
    } else {
      $service_logo = $service->service_logo;
    }
    
    if ($request->hasFile('service_image')) {
     
      $img = $request->service_image;
      $service_image= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/services'),$service_image);

      if ($service->service_image) {
        Storage::delete(public_path('storage/services') . $service->service_image);
      }
    } else {
      $service_image = $service->service_image;
    }



    $all =$request->all();
    // prd($all);

    $formDataArray = $request->input('form_data');
    $service = Service::where("id", $request->id)->first();

    if ($formDataArray) {
        $formIds = array_filter(array_column($formDataArray, 'id'));
        $existingIds = ServicesData::where('service_id', $service->id)->pluck('id')->toArray();
        $idsToDelete = array_diff($existingIds, $formIds);

        ServicesData::whereIn('id', $idsToDelete)->delete();

        foreach ($formDataArray as $formData) {
            $id = $formData['id'] ?? null;
            $data = $formData['data'] ?? null;

            if ($id && in_array($id, $existingIds)) {
                ServicesData::where('id', $id)->update([
                    'data' => $data,
                    'updated_at' => now(),
                ]);
            }  else {
                ServicesData::create([
                    'service_id' => $service->id,
                    'data' => $data,
                    'created_at' => now(),
                ]);
            }
        }
    }



    $postData = ['title' => $request->title, 'description' => $request->description,'service_logo' => $service_logo, 'service_image' => $service_image, 'status' => $request->status, 'updated_at' => date('Y-m-d H:i:s')];
// prd($postData);
    $service->update($postData);
    return redirect('/admin/services')->with(['message' => 'Service updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsService  $service
   * @return IlluminateHttpResponse
   */


  public function destroy(Service $service) {
    Storage::delete('public/services/' . $service->image);
    $service->delete();
    return redirect('/admin/services')->with(['message' => 'Service deleted successfully!', 'status' => 'info']);
  }


  public function destroy_data($id)
{
    $serviceData = ServicesData::findOrFail($id);
    $serviceData->delete();

    return response()->json(['message' => 'Record deleted successfully']);
}

}
