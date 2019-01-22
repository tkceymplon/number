<?php

namespace App\Http\Controllers\Admin;

use App\Models\Accadamicyear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccadamicyearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                if ( Auth::user()->role == "Admin" ){

         $datas=Accadamicyear::get();
        return view('Admin/trinco/acc_year/index',compact('datas'));
       }}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                if ( Auth::user()->role == "Admin" ){

          $course=Accadamicyear::get();
                        return view('Admin/trinco/acc_year/createyear',compact('course'));
    }}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                if ( Auth::user()->role == "Admin" ){

        $data=new Accadamicyear;
        $data->acc_year=$request->name;
             $data->save();
             return redirect('/acc_year');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Accadamicyear  $accadamicyear
     * @return \Illuminate\Http\Response
     */
    public function show(Accadamicyear $accadamicyear)
    {
         
       // $datas=Subject::where
      //  return view('Admin/trinco/acc_year/index',compact('accadamicyear'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accadamicyear  $accadamicyear
     * @return \Illuminate\Http\Response
          * @param  int  $id

     */
    public function edit($id)
    {                if ( Auth::user()->role == "Admin" ){

       //  $data=$accadamicyear;
        $datas=Accadamicyear::find($id);
        return view('Admin/trinco/acc_year/edityear',compact('datas'));
       // return $accadamicyear;
      }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accadamicyear  $accadamicyear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                        if ( Auth::user()->role == "Admin" ){

         $data=Accadamicyear::find($id);
        $data->acc_year=$request->name;
        $data->save();
        return redirect('/acc_year'); 
      }
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accadamicyear  $accadamicyear
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                        if ( Auth::user()->role == "Admin" ){

         $data=Accadamicyear::find($id);
        $data->delete();
        return redirect('/acc_year'); 
      }
  }
}
