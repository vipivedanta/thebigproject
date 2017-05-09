<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\projectFormRequest;
use App\Http\Requests\ProjectEditrequest;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('user_id',Auth::id())->orderBy('name')->get();
        return view('projects.report',['projects' => $projects]);
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
    public function store(projectFormRequest $request)
    {   
        die('ss');
        $data = $request->all();
        unset($data['_token']);

        $project = new Project($data);
        $project->user_id = Auth::id();
        $project->save();

        return \Redirect::route('projects.index')->with('message','Congrats! You have just saved your new project!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $project = Project::find($id);
        return view('projects.edit',[ 'project' => $project ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectEditrequest $request, $id)
    {
        $project = Project::find($id);
        $project->name = $request->all()['name'];
        $project->description = $request->all()['description'];
        $project->save();
        return \Redirect::route('projects.index')->with('message','Project details has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
