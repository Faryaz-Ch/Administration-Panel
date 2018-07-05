<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Techadmin;


class TechadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techadmins = Techadmin::all();
        return view('admin.techadmin.index',compact('techadmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.techadmin.create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $techadmin = new Techadmin();
        $techadmin->name = $request->name;
        $techadmin->email = $request->email;
        $techadmin->password = $request->password;
        $techadmin->save();
        return redirect()->route('techadmin.index')->with('successMsg','Technical Admin Successfully Saved');
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
        $techadmin = Techadmin::find($id);
        return view('admin.techadmin.edit',compact('techadmin'));
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $techadmin = Techadmin::find($id);


        $techadmin->name = $request->name;
        $techadmin->email = $request->email;
        $techadmin->password = $request->password;
        $techadmin->save();
        return redirect()->route('techadmin.index')->with('successMsg','Record Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $techadmin = Techadmin::find($id);
        $techadmin->delete();
        return redirect()->back()->with('successMsg','Successfully Deleted');
    }
}
