<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\WhyChoose;
use App\Models\Technology;
use App\Models\Category;
use App\Models\Page;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Hiring;
use App\Models\servicesdata;
use App\Models\Industry;


use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 

        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!empty(auth()->id()) && auth()->user()->hasRole('Admin'))
        {
            
             return redirect('/admin');

        }

        $banners = Banner::where('is_publish','1')->get();
        $Services =Service::where('status','1')->get();
        $technologys =Technology::where('status','1')->get();
        $testimonials =Testimonial::where('status','1')->get();
        $aboutus =Page::where('title','About us')->get();
        $faqs =Faq::where('status','1')->get();
        $teams =Team::where('status','1')->get();
        $blogs =Blog::where('is_publish','1')->get();
        $projects =Project::where('status','1')->get();
        $hirings =Hiring::where('status','1')->get();
        $hirings =Hiring::where('status','1')->get();
        $customers =Page::where('title','customers')->get();
        
        // prd($banners);
       
        return view('users.home', ['banners' => $banners,'Services' => $Services,'technologys' => $technologys,'testimonials' => $testimonials,"aboutus"=>$aboutus,"faqs"=>$faqs,'teams'=>$teams, 'blogs'=>$blogs,'projects'=>$projects,'hirings'=>$hirings,'customers'=>$customers]);
    }


    public function home2()
    {
        $banners = Banner::where('is_publish','1')->orderBy('priority', 'asc')->get();
        $Services =Service::where('status','1')->get();
        $technologys =Technology::where('status','1')->get();
        $testimonials =Testimonial::where('status','1')->get();
        $aboutus =Page::where('title','About us')->get();
        $faqs =Faq::where('status','1')->get();
        $teams =Team::where('status','1')->get();
        $blogs =Blog::where('is_publish','1')->get();
        $projects =Project::where('status','1')->get();
        $hirings =Hiring::where('status','1')->get();
        $hirings =Hiring::where('status','1')->get();
        $customers =Page::where('title','customers')->get();
        
        // prd($banners);
       
        return view('users.home2', ['banners' => $banners,'Services' => $Services,'technologys' => $technologys,'testimonials' => $testimonials,"aboutus"=>$aboutus,"faqs"=>$faqs,'teams'=>$teams, 'blogs'=>$blogs,'projects'=>$projects,'hirings'=>$hirings,'customers'=>$customers]);
     }

    function technologyCategory($id) { //Request $request) {//$categoryId
       // $request->ajax();
        //$request->get('id');
        $technologies = Category::findOrFail($id)->technologies;
        //Technology::where('status','1')->('status','1')->get();
        //dd($technologies);
        $html = '';
        if($technologies) {
            foreach($technologies as $technology) {
                $html .= '<div class="col-lg-4 col-md-6 col-sm-10" data-wow-delay="0.3s">
                            <div class="service-item-two color-1 mt-30">
                                <h3 class="title">'.$technology->title.'</a></h3>
                                <p>';
                                    if($technology->image!='') {
                                        $html .= '<img src="'.url('/storage/technologies/'.$technology->image).'" width="100px" />';
                                    } else {
                                        $html .='DEFAULT IMG';
                                    }
                                $html.= '</p>
                            </div>
                        </div>';
            }
        } else {
            $html = '<p>Not record.</p>';
        }
        echo $html;
    } 
    


    public function about()
    {
        $aboutus =Page::where('title','About us')->get();
        $testimonials=Testimonial::where('status','1')->get();
        $Services =Service::where('status','1')->get();
        
        return view('users.about-us', ["aboutus"=>$aboutus,'testimonials'=>$testimonials,'Services'=>$Services]);
    }

    public function blogs(Request $request)
    {
        $Services =Service::where('status','1')->get();
        $blogs =Blog::where('id',$request->id)->get();
        $blogss =Blog::all();
        
        return view('users.blog', ['blogs'=>$blogs,'Services'=>$Services,'blogss'=>$blogss]);
    }

    public function technologies(Request $request)
    {
        $Services =Service::where('status','1')->get();
        $categories = Category::where('status','1')->get();
        $technologys =Technology::where('status','1')->get();
        // $blogss =Blog::all();
        
        // return $categories;
        // return $technologys;
        // return view('users.blog', ['blogs'=>$blogs,'Services'=>$Services,'blogss'=>$blogss]);
        return view('users.technologies', ['Services'=>$Services,'categories'=>$categories,'technologys'=>$technologys]);
    }

    public function blog()
    {
        $Services =Service::where('status','1')->get();
        // $blogs =Blog::where('id',$request->id)->get();
        $blogs =Blog::all();
        
        return view('users.blogs', ['Services'=>$Services,'blogs'=>$blogs]);
    }

    public function career()
    {
        $Services =Service::where('status','1')->get();
        // $blogs =Blog::where('id',$request->id)->get();
        $hirings =Hiring::all();
        
        return view('users.career', ['Services'=>$Services,'hirings'=>$hirings]);
    }


    public function services()
    {
        $Services =Service::where('status','1')->get();
        $Services_data=servicesdata::all();
        
        return view('users.services', ['Services'=>$Services,'Services_data'=>$Services_data]);
    }


    public function portfolio()
    {
        $categories = Category::where('status','1')->get();
        $projects =Project::where('status','1')->get();
        $testimonials =Testimonial::where('status','1')->get();

        return view('users.portfolio',['projects'=>$projects,'categories'=>$categories,'testimonials'=>$testimonials]);
    }
    
    public function industry()
    {
        $industrys = industry::where('status','1')->get();
        
        // prd($industrys);
        return view('users.industry',['industrys'=>$industrys]);
    }
    
}
