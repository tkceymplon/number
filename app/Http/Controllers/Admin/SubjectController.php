<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {              
        $course=Course::get();
        return view('Admin/trinco/subject/index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {             
                $course=Course::get();
                        return view('Admin/trinco/subject/createsubject',compact('course'));

    
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                 
         for ($i=0; $i < sizeof($request->subject); $i++) {
         $data=new Subject;
         $data->course_id=$request->course;
         $data->level=$request->level;
         $data->semi=$request->semi;
         $data->subject_name=$request->subject[$i];
         $data->subject_code=$request->code[$i];
         $data->save();

         }
                return redirect('/course');
       // return $request;
    
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {                
        $course=Course::find($id);
        $sub=Course::find($id)->subjects;
       // $datas=Subject::where
        return view('Admin/trinco/subject/index',compact('course','sub'));
    
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {               
        $data=Subject::find($id);
        $course=Subject::find($id)->course;
        return view('Admin/trinco/subject/editsubject',compact('data','course'));
    
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
        $data=Subject::find($id);
        $data->subject_name=$request->name;
        $data->subject_code=$request->code;
        $data->save();
        return redirect('/course'); 
    
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {               
                 $data=Subject::find($id);
        $data->delete();
        return redirect('/course'); 
    
}
     public function showstudentsub($id)
    {          

        $course=Course::find($id);
        $sub=Course::find($id)->subjects;
       // $datas=Subject::where
        return view('Admin/trinco/subject/studentsub',compact('course','sub'));
    
}
}
