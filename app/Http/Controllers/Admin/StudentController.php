<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Accadamicyear;
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Hour;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                if ( Auth::user()->role == "Admin" ){

                  $datas=Accadamicyear::get();

        return view('Admin/trinco/student/index',compact('datas'));
       }}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                if ( Auth::user()->role == "Admin" ){

          $year=Accadamicyear::get();
          $course=Course::get();
        return view('Admin/trinco/student/createstudent',compact('year','course'));
       }}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
if ( Auth::user()->role == "Admin" ){

    for ($i=0; $i < sizeof($request->name); $i++) { 

   
        $data=new Student;
        $data->name=$request->name[$i];
        $data->reg_no=$request->reg_no[$i];
        $data->course_id=$request->course[$i];
        $data->accadamicyear_id=$request->year[$i];
        $data->save();

        $stu=new User;
        $stu->name=$request->name[$i];
        $stu->reg=$request->reg_no[$i];
        $stu->password=bcrypt($request->reg_no[$i]);
        $stu->role="User";
        $stu->email=$request->name[$i].$request->reg_no[$i]."@gmail.com";
        $stu->save();

    }
            return redirect('/student');

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

         $data=Student::find($id);
         $year=Student::find($id)->accadamicyear;
                         $course=Student::find($id)->course;

       return view('Admin/trinco/student/showstudent',compact('data','year','course'));
  
    }
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {                if ( Auth::user()->role == "Admin" ){

                 $data=Student::find($id);
                $year=Student::find($id)->accadamicyear;
                $course=Student::find($id)->course;
                  $datas=Accadamicyear::get();
       return view('Admin/trinco/student/editstudent',compact('data','datas','year','course'));
    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {                if ( Auth::user()->role == "Admin" ){

        $data=Student::find($id);
        $data->name=$request->name;
        $data->reg_no=$request->reg_no;
                $data->course_id=$request->course;

        $data->accadamicyear_id=$request->year;
        $data->save();
        return redirect('/student/'.$id);    
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {                if ( Auth::user()->role == "Admin" ){

                $data=Student::find($id);
                  $data->delete();
        return redirect('/student'); 
    }
     
     }public function studentview(Request $request)
    {                if ( Auth::user()->role == "Admin" ){

               $datas=Accadamicyear::find($request->year)->students;
               $year=Accadamicyear::find($request->year);
        return view('Admin/trinco/student/studentview',compact('datas','year')); 
              
    }
    }
     public function stu(Request $request)
    {                

     $user =Student::where('reg_no', $request->reg)->first();
    $sub=Subject::where('level',$request->level)->where('semi',$request->semi)->get();
    $suba=[];
    $persan=[];
    $i=0;
     foreach ($sub as $key) {
         
     if ($key!=null&& $user!=null) {

     $per=Attendance::where('student_id',$user->id)->where('subject_id',$key->id)->count();
     $pertk=Attendance::where('student_id',$user->id)->where('subject_id',$key->id)->sum('hour');
     $hou=Hour::where('subject_id',$key->id)->first();
if ($hou != null) {


     $suba[$i]=$key->subject_name;


    $persan[$i]=($pertk/$hou->hour)*100;
    $i++;
}
    // $user_info =Attendance::select('subject_id',
    //  DB::raw('count(*) as total'))
    //              ->groupBy('subject_id')
    //              ->where("student_id",$user->id)
    //              ->get();  

}

    return  view('Admin/trinco/student/student',compact('suba','persan'));
    
}
}
public function stushow()
{
              // $user =Student::where('reg_no', $request->reg)->get();
        return view('Admin/trinco/student/stu');
    

}
public function stuattview()
    {                if ( Auth::user()->role == "Admin" ){

              // $user =Student::where('reg_no', $request->reg)->get();
        return view('Admin/trinco/student/studentattview');
    }

}}
