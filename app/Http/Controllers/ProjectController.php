<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic;
use App\User;
use App\Image;
use Auth;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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

        if (!file_exists(public_path('images/uploads/' . $request->get('name')))) {
            mkdir(public_path('images/uploads/' . $request->get('name')), 0777, true);
        }

        ImageManagerStatic::make($request->get('image'))->save(public_path('images/uploads/' . $request->get('name') . '/') . $fileName);
        
        $project = Project::create([
            'user_id' => Auth::user()->id,
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'github' => $request->get('github'),
            'production_url' => $request->get('production_url'),
            'tags' => $request->get('tags'),
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') .'/images/uploads/' . $request->get('name') . "/" . $fileName
                ],                             
            ]
        );

        $project->projectMembers()->createMany([
            [
                'user_id' => Auth::user()->id
            ],
        ]);
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
        return view('projects.edit')->with(['projectId' => $project->id]);
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
        //
    }
}