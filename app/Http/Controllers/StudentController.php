<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Dompdf\Dompdf;
use Hekmatinasser\Verta\Verta;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Mpdf\Mpdf;

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
        $notification =
            [
                'message' => 'کابر با موفقیت دخیره شد',
                'alert-type' => 'success'

            ];
        return to_route('students')->with($notification);


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
                ->editColumn('dob',function ($row){
                    return Verta($row['dob'],'Asia/Tehran')->format('Y/m/d');
                })
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn =
       '<button type="button" class="btn btn-primary editbtn btn-sm" value="'. value($row['id']) .'">Edit </button>
        <button type="button" class="btn btn-warning showbtn btn-sm" value="'. value($row['id']) .'">Show </button>
       <a href="'. route('student.delete',$row['id']) . '" class="delete btn btn-danger btn-sm" id="delete">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }

        return to_route('students');

    }
    public function html()
    {
        $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'buttons' => ['postExcel', 'postCsv', 'postPdf'],
            ]);
    }

public function EditStudentModal(string $id){
    try {
        $student = Student::query()->find($id);
        return response()->json(['status' => 200, 'student' => $student]);
    } catch (\Exception $e) {
        return response()->json(['status' => 500, 'error' => $e->getMessage()], 500);
    }
}

    public function ShowStudentModal(string $id){

        try {
            // Eager load the 'profile' relationship
            $student = Student::with('profile')->find($id);

            if ($student) {
                return response()->json(['status' => 200, 'student' => $student]);
            } else {
                return response()->json(['status' => 404, 'error' => 'Student not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()], 500);
        }
    }
    public function edit(string $id){
        $student = Student::query()->where('id',$id)->first();
        return view('student.edit',compact('student'));
    }
    public function update( Request $request){
        $student = Student::query()->where('id',$request['student_id'])->first();
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->username = $request['username'];
        $student->phone = $request['phone'];
        $student->dob = Carbon::create( $request['dob'],'Asia/Tehran')->format('Y-m-d');
        $student->save();
        $notification =
            [
                'message' => 'تغییرات با موفقیت ثبت شد',
                'alert-type' => 'success'

            ];
        return to_route('students')->with($notification);
    }
    public function destroy($id){

        $student = Student::query()->findOrFail($id);
        if ($student){
            $student->delete();
            $notification =
                [
                    'message' => 'کاربر با موفقیت حذف شد',
                    'alert-type' => 'success'

                ];
            return to_route('students')->with($notification);
        }else{
            $notification =
                [
                    'message' => 'عملیات با موفقیت صورت نگرفت!',
                    'alert-type' => 'danger'

                ];
            return to_route('students')->with($notification);
        }


    }
    public function importt(){
        return view('student.import');
    }
    public function export()
    {
        return Excel::download(new StudentExport, 'students.xlsx');
    }
    public function import(Request $request)
    {
        Excel::import(new StudentImport,$request->file('import_file'));

        return redirect('/')->with('success', 'All good!');
    }
    public function pdf(){
        return Excel::download(new StudentExport, 'invoices.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}
