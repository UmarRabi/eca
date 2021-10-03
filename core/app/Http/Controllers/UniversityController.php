<?php

namespace App\Http\Controllers;

use App\University;
use Illuminate\Http\Request;
use App\Country;
use Auth;
class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $universities = University::all();
        return view('university.list',compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::pluck('name', 'code');
        return view('university.create')->with('countries', $countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'country' => 'required',
            //'address' => 'required',
            //'photo'=>'image|nullable'
        ]);

      if($request->hasFile('photo')){
            $file=$request->file('photo');
            $filename=$request->name;
            $filextension=$file->getClientOriginalExtension();
            $path="public/schools";
            $file->storeAs($path,$filename.".".$filextension);
      }
      echo var_dump();
        $university = new University();
        $university->name = $request->name;
        $university->country_code = $request->country;
        $university->description = $request->description;
        $university->photo = $request->photo;
        $university->created_by=Auth::id();
        $university->save();

        return redirect::back()->with('success','University Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('university.show',['uni' => University::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        //
    }
}
