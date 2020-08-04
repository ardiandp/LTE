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
}
