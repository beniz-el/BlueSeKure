<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class hoteController extends Controller
{
    public function search(Request $request){
    	$request->validate([
             'q' => 'required'
    	]);
        $q = $request->q;
        $point = DB::table('hotes')->where('nom_magasin','like','%'. $q . '%')->get();

        return view('point', ['points'=> $point]);
    }

     public function searchcode(Request $request){
    	$request->validate([
             'q' => 'required'
    	]);
        $q = $request->q;
        $code = DB::table('reservations')->where('ref','like','%'. $q . '%')->get();

        return view('codesearch', ['codes'=> $code]);
    }
    
    
}
