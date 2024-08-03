<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Faq;

use DB;
use Hash;

class FaqController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $faqs = Faq::orderBy('id', 'desc')->paginate(50);
    return view('admin.faqs.index', ['faqs' => $faqs]);
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
            $faqs =     Faq::                        
                        where('question', 'like', '%'.$query.'%')
                        ->orWhere('answer', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.faqs.faq_pagination_data', compact('faqs'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('admin.faqs.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    
      $request->validate([
        'question' => 'required',
        'status' => 'required',
      ]);
    
    $faqData = ['question' => $request->question, 'answer' => $request->answer, 'status' => $request->status, 'created_at' => date('Y-m-d H:i:s')];

    Faq::create($faqData);
    return redirect('/admin/faqs')->with(['message' => 'Faq added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsFaq  $faq
   * @return IlluminateHttpResponse
   */
  public function show(Faq $faq) {
    return view('admin.faqs.show', ['faq' => $faq]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsFaq  $faq
   * @return IlluminateHttpResponse
   */
  public function edit(Faq $faq) {
    return view('admin.faqs.edit', ['faq' => $faq]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsFaq  $faq
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Faq $faq) {
    $postData = ['question' => $request->question, 'answer' => $request->answer, 'status' => $request->status, 'updated_at' => date('Y-m-d H:i:s')];

    $faq->update($postData);
    return redirect('/admin/faqs')->with(['message' => 'Faq updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsFaq  $faq
   * @return IlluminateHttpResponse
   */
  public function destroy(Faq $faq) {
    //Storage::delete('public/faqs/' . $faq->image);
    $faq->delete();
    return redirect('/admin/faqs')->with(['message' => 'Faq deleted successfully!', 'status' => 'info']);
  }
}
