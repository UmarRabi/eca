<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Country;

class PagesController extends Controller
{
    //

    public function about()
    {
        return view('about');
    }
    public function welcome()
    {
        $universities = University::get();
        $countries = Country::get();
        return view('welcome',compact('universities','countries'));
    }
    public function facilities()
    {
        return view('facilities');
    }
    public function contact()
    {
        return view('contact');
    }
    public function faq()
    {
        return view('faq');
    }

    public function search(Request $request){
        $alluniversities = University::get();
        $countries = Country::get();
        $universities = University::where(function($query) use ($request){
        if($request->has('country') && $request->country != null){
            $query->where('country_id','=',$request->country);
        }
        if($request->has('university') && $request->university != null){
            $query->where('id','=',$request->university);
        }
        })->get();
        return view('search',compact('universities','countries','alluniversities'));
    }


}

