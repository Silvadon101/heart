<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admincourses');
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
        // ?--------Validation-----------
        // $request->validate([
        //     'coursename'=>'required',
        //     'start_date'=>'required',
        //     'end_date'=>'required',
        //     'duration'=>'required',
        //     'price'=>'required',
        //     'department'=> 'required',
        //     'description'=> 'required',
        //     'professor'=> 'required',

        // ]);
       
        $students = new Students();
        $students->dept_id = $request->input('department_id');
        $students->course_name = $request->input('coursename');
        $students->course_start_date = $request->input('start_date');
        $students->course_end_date = $request->input('end_date');
        $students->course_duration = $request->input('duration');
        $students->course_price = $request->input('price');
        $students->desc = $request->input('description');
        $students->prof = $request->input('professor');

        // -------Adding Image ---------
        $imgName = $request->file('image')->getClientOriginalName();
        $students->file('image')->storedAs('public/img/', $imgName);
        $students->photo = $imgName;
        $students->save();

        return back()->with('success','New Course Added');
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
}
