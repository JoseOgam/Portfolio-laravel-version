<?php

namespace App\Http\Controllers;

use App\Action;
use App\Project;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $project = Project::all();
        return view('action', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action)
    {
        $project = Project::find($action);
        return view('actions.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('actions.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'project_title'=>'required',
            'description'=>'required',
            'source_code'=>'required'
        ]);

        $project = Project::find($id);
        $project->project_title =  $request->get('project_title');
        $project->description =  $request->get('description');
        $project->source_code =  $request->get('source_code');
        $project->save();

        return redirect('actions.edit')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return void
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect('action')->with('success', 'project deleted!');
    }
}
