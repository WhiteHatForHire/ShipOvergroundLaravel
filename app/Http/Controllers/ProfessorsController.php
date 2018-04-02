<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Optional DB library
use DB;
use App\Professor;


class ProfessorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $professors = Professor::orderBy('created_at', 'desc')->get();
        return view ('professors.index')->with('professors', $professors);
        
    }

    public function store(Request $request)
    {
        // return view ('reviews.create');
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'professor_email' => 'required'
        ]);

        // Create Review
        $professor = new Professor;
        $professor->first_name = $request->input('first_name');
        $professor->last_name = $request->input('last_name');
        $professor->professor_email = $request->input('professor_email');
        $professor->department = $request->input('department');
        $professor->save();

        return redirect('/professors')->with('success', 'Professor Created');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professors.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        return view('professors.show')->with('professor', $professor);
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
