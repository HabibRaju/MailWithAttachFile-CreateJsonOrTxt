<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm(){
        return view('files.upload');
    }

    public function uploadFile(Request $request ){

    }
}
