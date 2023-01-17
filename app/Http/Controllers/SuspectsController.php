<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Suspect;

class SuspectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('suspects.suspects',[
            'Suspects'=>Suspect::all()
        ]);

    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET add suspects
        return view('suspects.suspectsAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST

        $request->validate(
            [
                'name'=>'required',
                'DOB'=>'required',
                'residence'=>'required',
                'police_station'=>'required',
                'police_station'=>'required',
                
                ]
            );

        $suspects= new Suspect();

        $suspects->sup_id= $request->input('sup_id');
        $suspects->name = $request->input('name');
        $suspects->DOB= $request->input('DOB');
        $suspects->residence= $request->input('residence');
        $suspects->statement= $request->input('statement');
        $suspects->police_station= $request->input('police_station');
        $suspects->belongings= $request->input('belongings');

        $suspects->created_at= $request->input('created_at');

        $suspects->save();

        return redirect()->route('suspects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
