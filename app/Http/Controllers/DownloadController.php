<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Download;

class DownloadController extends Controller
{
    public function downloadTemplate()
    {
        return response()->download(Storage::path('public/store/cv of Saikat Sanyal.doc'));
    }
}
