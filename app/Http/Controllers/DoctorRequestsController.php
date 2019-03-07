<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorRequest;
class DoctorRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:doctor_requests,email',
            'phone' => 'required',
            'certificates' => 'required',
            'age' => 'required|numeric',
            'experience' => 'required|numeric',

        ]);
        $doctor = new DoctorRequest();
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->phone = $request->input('phone');
        $doctor->certificates = $request->input('certificates');
        $doctor->age = $request->input('age');
        $doctor->experience = $request->input('experience');
        $doctor->save();
        if($doctor->save()){
            return redirect('newdoctor')->with('success','send successfully, we will send email or call you');
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
