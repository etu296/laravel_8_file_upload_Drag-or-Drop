<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function FileUpload()
    {
        $files = FileUpload::all();
        return view('files.files-upload',compact('files'));
    }
    public function FileCreate()
    {
        return view('files.files-create');
    }
    public function FileStore(Request $request)
    {
        $image = $request->file('file');
        $FileName = $image->getClientOriginalName();
        $image->move(public_path('images'), $FileName);

        $imageUpload = new FileUpload();
        $imageUpload->filename = $FileName;
        $imageUpload->save();
        return response()->json(['success' => $FileName]);
    }
    public function FileDelete($id)
    {
$files=FileUpload::find($id);
if($files)
{
    
}
    }
}
