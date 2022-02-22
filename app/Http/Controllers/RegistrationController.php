<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{

    public function create()
    {
        return view('authentication.registration');
    }

    public function store(Request $request)
    {   
        // all-data store check
        // return $request->all();
        //form validate code
     $request->validate([
    'first_name' => 'required|max:70',
    'last_name' => 'required|max:70',
    'email' =>  'required|unique:users',
    'mobile' => 'required|unique:users',
    'password' => 'required|min:8',
    'confirm_password' => 'required_with:password|same:password|min:8',
    ],
    [
    'email.unique'=>'All ready email exit!',
    'mobile.unique'=>'All ready mobile no exit!',
    ], 

    );
     // Sentinel::registerAndActivate()
      $user=Sentinel::registerAndActivate($request->all());
       
      $role =Sentinel::findRoleBySlug('student');

      $role->users()->attach($user);
     //return back dile delete hoye oi page thakbe
     return back()->with('success',"Registration successfully");
      // return redirect('/loginUser')->back()->with('success','Registration successfully');

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
