<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tutor;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::all();
        return view('admin.tutor.index',compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tutor.create');
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
            'FirstName' => 'required|alpha||min:2|max:30',
            'LastName' => 'required|alpha|min:2|max:30',
            'T_Department' => 'required|min:3|max:30',

            'email'=>'required|unique:tutors,email',
            'subjects' => 'required',
            //'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->FirstName);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/tutor'))
            {
                mkdir('uploads/tutor', 0777 , true);
            }
            $image->move('uploads/tutor',$imagename);
        }else {
            $imagename = 'default.png';
        }

        $tutor = new Tutor();
        $tutor->fname = $request->FirstName;
        $tutor->lname = $request->LastName;
        $tutor->department_name = $request->T_Department;
        $tutor->email = $request->email;
        $tutor->subjects = $request->subjects;
        $tutor->image = $imagename;
        $tutor->save();
        return redirect()->route('tutor.index')->with('successMsg','Tutor Successfully Saved');
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
        $tutor = Tutor::find($id);
        return view('admin.tutor.edit',compact('tutor'));
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
            'FirstName' => 'required|alpha|min:2|max:30',
            'LastName' => 'required|alpha|min:2|max:30',
            'T_Department' => 'required|min:2|max:30',
            'email' => 'required|email',
            'subjects' => 'required',
            //'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->FirstName);
        $tutor = Tutor::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/tutor'))
            {
                mkdir('uploads/tutor', 0777 , true);
            }
            $image->move('uploads/tutor',$imagename);
        }else {
            $imagename = $tutor->image;
        }

        $tutor->fname = $request->FirstName;
        $tutor->lname = $request->LastName;
        $tutor->department_name = $request->T_Department;
        $tutor->email = $request->email;
        $tutor->subjects = $request->subjects;
        $tutor->image = $imagename;
        $tutor->save();
        return redirect()->route('tutor.index')->with('successMsg','Tutor Record Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        if (file_exists('uploads/student/'.$tutor->image))
        {
            unlink('uploads/student/'.$tutor->image);
        }
        $tutor->delete();
        return redirect()->back()->with('successMsg','Tutor Successfully Deleted');
    }
}
