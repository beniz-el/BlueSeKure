<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hote;

class devenirhoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('hote.devenirhote');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request){
        $this->validate( $request, [
            'nom_magasin' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'responsable' => 'required'
        ]);
        $hote = new Hote([
            'nom_magasin' => $request->get('nom_magasin'),
            'adresse' => $request->get('adresse'),
            'tel' => $request->get('tel'),
            'responsable' => $request->get('responsable')
        ]);
        $hote->save();
        return redirect()->route('hote.create')->with('success','Data Added');
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
