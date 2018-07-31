<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    public function index()
{
    $experiences = Experience::get();
    return view('experience.index', compact('experiences'));
}

public function create(Request $request)
{
    return view('experience.create');
}

public function store(Request $request)
{
    //dd($request->all());
    $experience = Experience::create($request->all());
    return ['success' => "Experience Created Succesfully"];
}
}
