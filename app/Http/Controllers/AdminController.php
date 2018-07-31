<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\GeneralInfo;
use App\Skill;
use App\TimeLine;


class AdminController extends Controller
{
    public function index(){
        $experiences = Experience::get();
        $general_infos = GeneralInfo::get();
        $skills = Skill::get();
        $timelines = TimeLine::get();
        return view('admin.index', compact('experiences','general_infos','skills','timelines'));
    }
    public function create()
    {
        $experiences = Experience::get();
        //dd($permissions);
        return view('experience.create',compact('experience'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $experiences = Experience::create($request->all());
        return ['success' => "Experience Created Succesfully"];
    }
    public function edit($id)
    {
        $experiences = Experience::findOrFail($id);
        return view('experience.edit',compact('experiences'));
    }
    public function update(Request $request, $id)
    {
        $experiences = Experience::findOrFail($id);
        $experiences ->update($request->all());
        return("Updated");
        //return redirect()->back()->withSuccess('Roles updated Successfully');
    }
    public function destroy($id)
    {
        Experience::destroy($id);
        return ('success');
    }
    public function editGeneral_Info($id)
    {
        $general_infos = GeneralInfo::findOrFail($id);
        return view('general_info.edit',compact('general_infos'));
    }
    public function updateGeneral_Info(Request $request, $id)
    {
        $general_infos = GeneralInfo::findOrFail($id);
        $general_infos ->update($request->all());
        return("Updated");
        //return redirect()->back()->withSuccess('Roles updated Successfully');
    }
    public function skillCreate()
    {
        $skills = Skill::get();
        //dd($permissions);
        return view('skill.create',compact('skills'));
    }
    public function skillStore(Request $request)
    {
        //dd($request->all());
        $skills = Skill::create($request->all());
        return ['success' => "Skill Created Succesfully"];
    }
    public function editSkill($id)
    {
        $skills = Skill::findOrFail($id);
        return view('skill.edit',compact('skills'));
    }
    public function updateSkill(Request $request, $id)
    {
        $skills = Skill::findOrFail($id);
        $skills ->update($request->all());
        return("Updated");
        //return redirect()->back()->withSuccess('Roles updated Successfully');
    }
    public function createTimeLine()
    {
        $timelines = TimeLine::get();
        //dd($permissions);
        return view('timelines.create',compact('timelines'));
    }
    public function storeTimeLine(Request $request)
    {
        //dd($request->all());
        $timelines  = TimeLine::create($request->all());
        return ['success' => "Time line info Created Succesfully"];
    }
    public function editTimeLine($id)
    {
        $timelines = TimeLine::findOrFail($id);
        return view('timelines.edit',compact('timelines'));
    }
    public function updateTimeLine(Request $request, $id)
    {
        $timelines  = TimeLIne::findOrFail($id);
        $timelines ->update($request->all());
        return("Updated");
        //return redirect()->back()->withSuccess('Roles updated Successfully');
    }
}
