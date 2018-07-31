<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\GeneralInfo;
use App\Experience;
use App\Skill;
use App\TimeLine;

class HomePageController extends Controller
{
    public function index(){
        $files = File::all();
        $general_infos = GeneralInfo::all();
        $experiences = Experience::get();
        $skills = Skill::get();
        $timelines = TimeLine::get();
        return view('welcome',compact('files','general_infos','experiences','skills','timelines'));
    }

}
