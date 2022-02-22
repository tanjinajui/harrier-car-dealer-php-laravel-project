<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departments;
use App\Students;

class StudentController extends Controller
{
      //Authentication use Register chara login er jonno
    public function __construct()
{
    $this->middleware('admin');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Students::orderBy('id','desc')->paginate(3);
        return view('Student.index',compact('students'));
    }
    // data view 
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Departments::all();
        return view('Student.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //form validation
        $request->validate([
        'student_name' => 'required',
        'student_address' => 'required|max:255',
        'student_email' => 'required|unique:students',
        'student_mobile' => 'required|unique:students',
    ]);
        $department=Departments::where('id',$request->departments_id)->first();
        $student=Students::where('departments_id',$request->departments_id)->get();
        $nubRow=count($student)+1;
        if ($nubRow <10) {
            $student_id=$department->short_name.'-'.date('Y').'-'."00" . $nubRow;
        }
        elseif ($nubRow >=10 && $nubRow<=99) {
            $student_id=$department->short_name.'-'.date('Y').'-'."0" . $nubRow;
        }
        elseif ($nubRow<=100) {
            $student_id=$department->short_name.'-'.date('Y').'-'. $nubRow;
        }
        $data=new Students;
        $data->student_name=$request->student_name;
        $data->student_id=$student_id;
        $data->student_address=$request->student_address;
        $data->student_email=$request->student_email;
        $data->student_mobile=$request->student_mobile;
        $data->departments_id=$request->departments_id;
        $data->save();
        
        return redirect('/students')->with('success', "Data inserted successfully student ID is $student_id");
        //create page show korbe
        //return back()->with('success',"data inserted successfully student ID is $student_id");
        // $data_add=$request->all();
        // Students::create($data_add);
        // return back();
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
       $data_show=Students::find($id);
       return view('Student.edit',compact('data_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $update, $id)
    {
        $data=Students::find($id);
        $update_data=$update->all();
        $data->update($update_data);
        return redirect('/students')->with('success','Student information update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Delete Function
    public function destroy($id)
    {
        $data_show=Students::find($id);
        $data_show-> delete();
        //return back dile delete hoye oi page thakbe
        return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/students')->with('success',"Delete this data");
    }
     
}
