<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pathway;
use App\Projects;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectss = Projects::all();
        return view('admin.projects.index',compact('projectss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pathways = Pathway::all();
        return view('admin.projects.create',compact('pathways'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pathway' => 'required',
            'name' => 'required',
            'description' => 'required',

        ]);


        $projects = new Projects();
        $projects->pathway_id = $request->pathway;
        $projects->name = $request->name;
        $projects->description = $request->description;

        $projects->save();
        return redirect()->route('projects.index')->with('successMsg','Projects Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Projects::find($id);
        $pathways = Pathway::all();
        return view('admin.projects.edit',compact('projects','pathways'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'pathway'=> 'required',
            'name' => 'required',
            'description' => 'required',
          ]);

        $projects = Projects::find($id);
        $projects->pathway_id = $request->pathway;
        $projects->name = $request->name;
        $projects->description = $request->description;

        $projects->save();
        return redirect()->route('projects.index')->with('successMsg','Projects Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Projects::find($id)->delete();
        return redirect()->back()->with('successMsg','Projects successfully Deleted');
    }
}
