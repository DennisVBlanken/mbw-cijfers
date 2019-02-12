<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Grade;
use App\User;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grades/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdd()
    {

            $grades = Grade::all();
            $users = User::all()->where('role', '=', 'student');
            return view('grades/add', compact('grades', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'subject'=>'required',
            'grade'=>'required',
            'test_name'=>'required',
            'description'=>'required'
        ]);
        $grades = new Grade([

            'subject'=> $request->get('subject'),
            'grade'=> $request->get('grade'),
            'user_id'=> $request->get('user_id'),
            'test_name'=> $request->get('test_name'),
            'description'=> $request->get('description')
        ]);
        $grades->save();
        return redirect('/student/cijfers')->with('success', 'grade toegevoegd');
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
