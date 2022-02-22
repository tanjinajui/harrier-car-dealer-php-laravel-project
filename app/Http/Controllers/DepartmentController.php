<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departments;

class DepartmentController extends Controller
{
      //Authentication use Register chara login er jonno
    public function __construct()
{
    $this->middleware('admin');
}
    // data view 
    public function index()
    {
        //$departments=Departments::all();
        $departments=Departments::orderBy('id','desc')->paginate(2);
        return view('Department.view',compact('departments'));
    }
    //laravel a data create function
    public function create()
    {
        //data show variable = controller name
        //(controller name)Departments: all(); first theke data show
        //$departments=Departments::all();
        //(controller name)Departments:: orderBy('id','desc/asc')->get(); first theke data show
        $departments=Departments::orderBy('id','desc')->paginate(2);
        //view(table name+page name)('Department.create',compact('departments(variable name)'))
        return view('Department.create',compact('departments'));
    }
    
    // laravel - database table data add
    public function store(Request $add)
    {
        //form validation
        $add->validate([
        'department_name' => 'required|unique:departments|max:255|min:3',
        'department_code' => 'required',
        'short_name' => 'required',
    ]);
        $data_add=$add->all();
        Departments::create($data_add);
        return back()->with('success', 'Data inserted successfully');
        //return $add->all();
    }

    // Data Edit function
    public function edit($id)
    {
        $data_show=Departments::find($id);
        return view('Department.edit',compact('data_show'));
    }

    //update function
    public function update(Request $update, $id)
    {
        $data=Departments::find($id);
        $update_data=$update->all();
        $data->update($update_data);
        return redirect('/departments/create')->with('success','Department update successfully');
    }
    // Delete function
    public function destroy($id)
    {
        $data_show=Departments::find($id);
        $data_show->delete();
        //return back dile delete hoye oi page thakbe
        return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/departments')->with('success',"Delete this data");
    }
}
