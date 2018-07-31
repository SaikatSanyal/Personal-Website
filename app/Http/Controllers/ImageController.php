<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;



class ImageController extends Controller
{
    public function index(){
        return view("images.file");
    }
    public function store(request $request){


        if($request->hasFile('file')){

            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();
            $request->file->storeAs('public/store',$filename);
            $file = new File;
            $file->name = $filename;
            $file->size = $filesize;
            $file->save();
            return 'yes';
         }
         return $request->all();
        // dd($request->hasFile('file'));
    }
}
