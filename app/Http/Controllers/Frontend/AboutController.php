<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Abouts;
class AboutController extends Controller
{
   public function index()
    {
    	$abouts=Abouts::orderBy('id','desc')->paginate(1);
    	return view('frontend.about.index',compact('abouts'));
    }
}
