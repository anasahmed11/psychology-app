<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitMethod;
class VisitMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
        [
            'type' => 'required|',
        ];
    public function index()
    {
        $methods=VisitMethod::all();
        return view('admin_dash/visit_method')->with('methods',$methods);
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
        $this->validate($request, [
            'type' => 'required',

        ]);

        $method = new VisitMethod();
        $method->type = $request->input('type');
        $method->save();

        return redirect('visit_method');
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
        $method=VisitMethod::find($id);
        return response()->json($method);
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

        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $method = VisitMethod::find($id);
            $method->type = $request->input('type');
            $method->save();
            return response()->json($method);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $method = VisitMethod::find($id);
        $method->delete();
        return redirect('visit_method')->with('success','delete successfully');
    }
}
