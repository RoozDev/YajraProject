<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){

        // form validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|min:3|max:20',
            'phone' => 'required|numeric',
            'dob' => 'required',
        ],
        [
            'name.required' => 'لطفا نام / اسم خود را وارد کنید.',
            'email.required' => 'لطفا پست الکترونیک / ایمیل خود را وارد کنید',
            'username.required' => 'لطفا نام کاربری خود را وارد کنید',
            'phone.required' => 'لطفا شماره تماس موبایل / خانه خود را وارد کنید',
            'dob.required' => 'تاریخ تولد خود را انتخاب نمایید'
        ]
        );


        $student = new Student();
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->username = $request['username'];
        $student->phone = $request['phone'];
        $student->dob = Carbon::create( $request['dob'],'Asia/Tehran')->format('Y-m-d');
        $student->save();
        return to_route('students');


    }
    public function welcome(){
        return view('welcome');
    }

    public function index()
    {
        return view('student.datatable');
    }

    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function edit(){
        return view();
    }
    public function update(){

    }
    public function destroy(){

    }
}
