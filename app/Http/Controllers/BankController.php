<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    //
    public function index()
    {
    	//menampilkan data bank
    	$bank=DB::table('bca_cv')->get();

    	// mengirim data
    	return view('bank/index',['bank'=>$bank]);
    }

    public function bca_cv()
    {
    	//menampilkan data dari BCA CV
    	$bca_cv=DB::table('bca_cv')->paginate(10);
    	return view('bank/bca_cv',['bca_cv'=>$bca_cv]);
    }
}
