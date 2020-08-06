<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekeningController extends Controller
{
    //
    public function index()
    {
    	//ambil data rekening
    	$rek=DB::table('no_rekening')->get();

    	//mengirim data pegawai
    	return view ('rekening/index',['rek'=>$rek]);
    }

    public function store(Request $request)
    {
    	DB::table('no_rekening')->insert([
    		'atas_nama' => $request->atas_nama,
    		'alias' => $request->alias,
    		'norek' => $request->norek,
    		'bank' => $request->bank,
    		'created_at' => date('Y-m-d H:i:s')
    	]);

    	//redirect
    	return redirect ('/rekening');
    	//return Redirect::back(); 
    }
}
