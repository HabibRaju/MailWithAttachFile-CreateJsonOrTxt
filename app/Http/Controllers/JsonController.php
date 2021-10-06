<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JsonController extends Controller
{
	public function jsonFileSave() 
    {
	  $users = User::with('posts')->get();

	  $data = json_encode($users);
      $jsongFile = "UserDetails" . '_file.json';
	  $destinationPath = public_path() . "/upload/";

	  if(!is_dir($destinationPath)) 
	  { 
		mkdir($destinationPath, 0777, true);  
	  }
    
	  File::put($destinationPath.$jsongFile, $data);

	  return "File Save Successfully";
	}

	public function readJson($id)
	{
		$data = File::get(public_path() . '/upload/UserDetails_file.json');
		$data=json_decode($data,true);

		dd($data[$id-1]);
	}

	public function edit($id)
	{
		$data = File::get(public_path() . '/upload/UserDetails_file.json');
		$data=json_decode($data,true);
		$user = $data[$id-1];

		return view('users.edit',compact('user'));
	}

	public function update(Request $request, $id)
	{
		$data 				  = File::get(public_path() . '/upload/UserDetails_file.json');
		$data				  =json_decode($data,true);
		$data[$id-1]['name']  = $request->name;
		$data[$id-1]['email'] = $request->email;
		
		$data = json_encode($data);
		$jsongFile = "UserDetails" . '_file.json';
		$destinationPath = public_path() . "/upload/";
	  
		File::put($destinationPath.$jsongFile, $data);

		return "User Updated Successfully";
	}
}