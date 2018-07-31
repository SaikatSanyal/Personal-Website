<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeLine;

class TimeLineController extends Controller
{
    public function index(){
        $timelines = TimeLine::get();
        return view('admin.timeline',compact('timelines'));
    }
}
