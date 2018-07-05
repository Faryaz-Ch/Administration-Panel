<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Student;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }
    
    /**
     * Search state from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'FirstName' => $request['fname'],
            'department.name' => $request['department_name']
            ];
        $students = $this->doSearchingQuery($constraints);
        $constraints['department_name'] = $request['department_name'];
        return view('admin.student.index', ['students' => $students, 'searchingVals' => $constraints]);
    }
    private function doSearchingQuery($constraints) {
        $query = DB::table('students')
        
        ->select('students.fname as First_Name', 'students.department_name as department_name');
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
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
            'FirstName' => 'required|alpha||min:3|max:30',
            'LastName' => 'required|alpha|min:3|max:30',
            'S_Department' => 'required|min:3|max:30',
            //'S_DOB' => 'required|alpha|min:3|max:10',
            //'email' => 'required|email',
            'email'=>'required|unique:students,email',
            //'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->FirstName);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/student'))
            {
                mkdir('uploads/student', 0777 , true);
            }
            $image->move('uploads/student',$imagename);
        }else {
            $imagename = 'default.png';
        }

        $student = new Student();
        $student->fname = $request->FirstName;
        $student->lname = $request->LastName;
        $student->department_name = $request->S_Department;
        //$student->birthdate = $request->S_DOB;
        $student->email = $request->email;
        $student->image = $imagename;
        $student->save();
        return redirect()->route('student.index')->with('successMsg','Student Successfully Saved');
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
        $student = Student::find($id);
        return view('admin.student.edit',compact('student'));
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
            'FirstName' => 'required|alpha|min:3|max:30',
            'LastName' => 'required|alpha|min:3|max:30',
            'S_Department' => 'required|min:3|max:30',

            'email' => 'required|email',
            //'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->FirstName);
        $student = Student::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/student'))
            {
                mkdir('uploads/student', 0777 , true);
            }
            $image->move('uploads/student',$imagename);
        }else {
            $imagename = $student->image;
        }

        $student->fname = $request->FirstName;
        $student->lname = $request->LastName;
        $student->department_name = $request->S_Department;
        $student->email = $request->email;
        $student->image = $imagename;
        $student->save();
        return redirect()->route('student.index')->with('successMsg','Student Record Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if (file_exists('uploads/student/'.$student->image))
        {
            unlink('uploads/student/'.$student->image);
        }
        $student->delete();
        return redirect()->back()->with('successMsg','Student Successfully Deleted');
    }
    
      

    
}
