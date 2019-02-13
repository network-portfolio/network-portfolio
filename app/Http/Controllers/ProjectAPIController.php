<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic;
use App\User;
use App\Image;

class ProjectAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::with(['images', 'projectMembers.user'])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageData = $request->get('image');
        $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
        ImageManagerStatic::make($request->get('image'))->save(public_path('images/new/').$fileName);
        
        return $request->get('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return Project::with(['images', 'projectMembers.user'])->where('id', $project->id)->get()->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
    }
}