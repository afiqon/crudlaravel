<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biodata;

class biodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = biodata::all();
        // return $biodatas;
        return view('biodata',compact('biodatas'));
    }
  public function getData()
    {
        $biodatas = biodata::all();
        // return $biodatas;
        return view('biodata',compact('biodatas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $biodata = new biodata;

        $biodata->nama = $request->nama;
        $biodata->hp = $request->hp;
        $biodata->alamat = $request->alamat;


        $biodata -> save();
        return redirect('biodata');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
};
