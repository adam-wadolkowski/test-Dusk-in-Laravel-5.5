<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller{

	public function index(){

		$users_data = User::all();
		//$i=0;

		return view('users.index',compact('users_data'))
            ->with('i');
		//return view('users.index')->with(compact('i','users_data'));
	}

	public function add(){

		return view('users.add');

	}

}