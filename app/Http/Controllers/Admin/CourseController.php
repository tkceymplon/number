<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
                if ( Auth::user()->role == "Admin" ){

        $datas=Course::get();
        return view('Admin/trinco/course/index',compact('datas'));}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                if ( Auth::user()->role == "Admin" ){

        return view('Admin/trinco/course/createcourse');
    }
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     if ( Auth::user()->role == "Admin" ){

        $data=new Course;
        $data->name=$request->name;
        $data->save();
        return redirect('/course');
    }
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    if ( Auth::user()->role == "Admin" ){

        $course=Course::find($id);
        return view('Admin/trinco/subject/createsubject',compact('course'));
    }
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                        if ( Auth::user()->role == "Admin" ){

        $data=Course::find($id);
        return view('Admin/trinco/course/editcourse',compact('data'));
    }}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {                if ( Auth::user()->role == "Admin" ){

         $data=Course::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect('/course');    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {                if ( Auth::user()->role == "Admin" ){

        $data=Course::find($id);
        $data->delete();
        return redirect('/course');       } }

        public function showcourse()
    {
       
       $datas=Course::get();
        return view('admin/trinco/course/studentcourseindex',compact('datas'));
   
         }
}
