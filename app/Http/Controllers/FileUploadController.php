<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as HandelFile;


class FileUploadController extends Controller
{
    function index(){

        $files = File::all();
        return view("fileupload", ['files' => $files]);
    }

    function upload(Request $request){
       
       $request->validate([
        'file'=> 'required | image',
       ]);

       

        $file = $request->file('file');
        $customName = 'Laravel_'. str::uuid();

        $ext = $file->getClientOriginalExtension();
        $fileName =  $customName . '.' . $ext; 
        $path = $file->storeAs('/upload', $fileName, 'dir_public');


        //$file = Storage::disk('local')->put('/', $request->file('file'));

       // $file = $request->file('file')->store('/', 'dir_public');
         
        $filestore = new File();
        $filestore->file_path = '/upload/'.$file;
        $filestore->save();
        
        //return redirect()->back();
        // return redirect()->route('home');
        return redirect()->away('http://www.google.com');
    }

    function download(){
        //return Storage::disk('public')->download('LShGv58FCa4OSuv8gASZcVMGwVzp8Fq1uHbzhFZR.jpg');

    }
}
