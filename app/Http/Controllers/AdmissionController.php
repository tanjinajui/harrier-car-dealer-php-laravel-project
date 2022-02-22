<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departments;
use App\Admissions;
use Image;


class AdmissionController extends Controller
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
        //all data show
        //$admissions=Admissions::all();
        // data first asc or last theke show desc
        //$admissions=Admissions::orderBy('id','asc')->paginate(2);
        //join key use onno table data add
        $admissions=Admissions::join('departments','admissions.departments_id','=','departments.id')->select('admissions.*','departments.department_name')->paginate(2);
        return view('Admission.index',compact('admissions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Departments::all();
        return view('Admission.create',compact('departments'));
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
        'student_id' => 'required|unique:admissions',
        'student_name' => 'required',
        'departments_id' => 'required',
        'student_section_name' => 'required',
    ]);

        $data_show=new Admissions;
        if ($request->hasfile('student_picture')) {
           $student_picture=$request->file('student_picture');
           
           $file_name=time().'.'.$student_picture->getClientOriginalExtension();
           //image_resize_compose_code
           $image_resize = Image::make($student_picture->getRealPath());              
           $image_resize->resize(300,300);

           $image_resize->save('images/student_picture/'.$file_name);          
           $data_show->student_picture=$file_name;
          //return $file_name;
        }
        $data_show->departments_id=$request->departments_id;
        $data_show->student_id=$request->student_id;
        $data_show->student_name=$request->student_name;
        $data_show->student_section_name=$request->student_section_name;
       
        $data_show->save();
        return redirect('/admissions')->with('success', 'Data inserted successfully');
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
        //$data_show=Admissions::find($id);
        //database theke data find kora jai
        $data_show=Admissions::where('id',$id)->first();
        $departments=Departments::all();
        return view('Admission.edit',compact('data_show', 'departments'));
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
        $data_show=Admissions::find($id);
        if ($request->hasfile('student_picture')) {
           $student_picture=$request->file('student_picture');
           
           $file_name=time().'.'.$student_picture->getClientOriginalExtension();
           //old img file
           $old_file=$data_show->student_picture;
           //image_resize_compose_code
           $image_resize = Image::make($student_picture->getRealPath());              
           $image_resize->resize(300,300);
           // if (!empty($old_file)) {
           //      $path=("images/student_picture/$old_file");
           //      unlink($path);
           // }
           //image upload na thake emty thakle
           if ($old_file!="") {
               $path=("images/student_picture/$old_file");
               unlink($path);
           }
           $image_resize->save('images/student_picture/'.$file_name);          
           $data_show->student_picture=$file_name;
          //return $file_name;
        }
        $data_show->departments_id=$request->departments_id;
        $data_show->student_id=$request->student_id;
        $data_show->student_name=$request->student_name;
        $data_show->student_section_name=$request->student_section_name;
       
        $data_show->save();
        
        return redirect('/admissions')->with('success','Admission Students upndate successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_show=Admissions::find($id);
        $data_show-> delete();
        //old img file
        $old_file=$data_show->student_picture;
        if ($old_file!="") {
               $path=("images/student_picture/$old_file");
               unlink($path);
           }
        //return back dile delete hoye oi page thakbe
        return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/admissions')->with('success',"Delete this data");
    }
}
