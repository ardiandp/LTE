<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Datatables;


class UserController extends Controller
{
    //coding disini 

    public function json ()
    {
    	return Datatables::of(Users::all())->make(true);

    }

    public function index()
    {
    	return view('list_users');
    }
}
