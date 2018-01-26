<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use Hash;

class UserController extends Controller{

	public function index(){

		$user_data['password'] = Hash::make('test');

		$users_data = User::all();
		//$i=0;

		return view('users.index',compact('users_data'))
            ->with('i');
		//return view('users.index')->with(compact('i','users_data'));
	}

	public function add(){
		return view('users.add');
	}

	public function save(Request $request){

		var_dump($request);

	}

}