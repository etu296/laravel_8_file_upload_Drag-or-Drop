<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function FileUpload()
    {
        return view('files.files-upload');
    }
    public function FileCreate()
    {
        return view('files.files-create');
    }
}
