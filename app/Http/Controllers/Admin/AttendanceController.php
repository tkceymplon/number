<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Accadamicyear;
use App\Models\Attendance;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Hour;
use App\Models\Student;
use DB;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $year = Accadamicyear::get();
        $course = Course::get();
        return view('Admin/trinco/attendance/attandance', compact('year', 'course'));


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 
 for ($i=0; $i < sizeof($request->option); $i++) { 
        $data=new Attendance;
        $data->student_id=$request->option[$i];
        $data->subject_id=$request->subject;
        $data->hour=$request->time;
        $data->date=$request->date;
        $data->save();

        }
return redirect('/attendance');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function destroy($id)
    {
        //
    }

public function storest(Request $request)
    {              
        $data=Course::find($request->course)->subjects;
        return view('Admin/trinco/attendance/sub',compact('data','request'));
       // return $request->course;  
    }
public function showstudent(Request $request)
    {          
        $atta = Hour::where('subject_id', '=', $request->subject)->first();
if ($atta === null) {
  
        $data=new Hour;
        $data->acc_year=$request->year;
        $data->subject_id=$request->subject;
        $data->hour=$request->lec_hour;
        $data->save();
}
else
{
    $da=Hour::where('subject_id',$request->subject)->first();
    $data=Hour::find($da->id);
    $hou=$da->hour+$request->lec_hour;
    $data->hour=$hou;
    $data->save();

}
        $year=Accadamicyear::find($request->year);
        $course=Course::find($request->course);
        $subject=Subject::find($request->subject);
        $datas=Accadamicyear::find($request->year)->students->where('course_id',$request->course);
    return view('Admin/trinco/attendance/createattendance',compact('datas','year','course','subject','request'));
    
}
public function showatt()
    {  
       
         $year=Accadamicyear::get();
        $subject=Subject::get();
    return view('Admin/trinco/attendance/viewshowatt',compact('year','subject'));
    }


        
public function viewatt(Request $request)
    { 
             
    $datas = DB::table('attendances')
            ->join('students', 'students.id', '=', 'attendances.student_id')
            ->join('subjects', 'subjects.id', '=', 'attendances.subject_id')
            ->select('students.*', 'attendances.date', 'attendances.hour','subjects.subject_name')
            ->where('date', $request->date)
            ->where('subject_id', $request->subject)
            ->get();

 if (empty($datas)) {
return redirect("/attantshow");
}
else{
            $year=Accadamicyear::find($request->year);
            $subject=Subject::find($request->subject);
            $course=Subject::find($request->subject)->course;
            $date=$datas{0}->date;
            $hour=$datas{0}->hour;
            $present=$datas->count();
            $total=Subject::find($request->subject)->course;
            $id=$total->id;
            $totalstudent=Student::where('course_id',$id)->where('accadamicyear_id', $request->year)->count();
            $persantage=($present/$totalstudent)*100;


    return view('Admin/trinco/attendance/atte',compact('datas','persantage','present','totalstudent','year','subject','date','hour','course'));

    }       

    
}

}

