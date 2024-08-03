<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactusController extends Controller
{
    public function index() {
        $contectus = Contactus::orderBy('id', 'desc')->paginate(50);
        return view('admin.contect-us.index', ['contectus' => $contectus]);
      }
}
