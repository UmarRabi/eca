<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faqs;
use Auth;
class FaqsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except('faqs');
    }


    public function faqs(){
        $faqs=Faqs::orderBy('created_at', 'desc')->paginate(10);
        return view("faqs.faq")->with('faqs', $faqs);
    }

    public function save(Request $request){
        $faqs=$request->validate([
            'title'=>['required'],
            'body'=>['required']
        ]);

        //return back()->withErrors([

        //]);        
       $faq=new Faqs();
       $faq->title=$request->title;
       $faq->body=$request->body;
       $faq->user_id=Auth::id();
       if($faq->save()){

       }
        $faqs=Faqs::orderBy('created_at', 'desc')->paginate(10);
        return view("faqs.faq")->with('faqs', $faqs);
    }

    public function create(){
        return view("faqs.create");
    }

    public function update(){
        return view("view");
    }

    public function delete(){
        return view("faqs");
    }
}
