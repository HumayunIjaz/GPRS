<?php
namespace App\Http\Controllers;
use App\Clear;
use App\Examiner;
use App\PHDProgress;
use App\Previousexaminor;
use App\Previousextension;
use App\Previousregistration;
use App\Previoussynopsis;
use App\Progress;
use App\Student;
use App\Extension;
use App\Synopsis;
use App\Thesis;
use Illuminate\Http\Request;
use input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {    
        $students = Student::where('id','=',0)->get();
        $roll_number='';
        $degree = '';
        $fall = '';

        return view ('student.index', compact('students', 'roll_number','degree' , 'fall'));
    }

    public function filter(Request $request){

        $degree =  $request->input('degree');
        $fall = $request->input('fall');
        $roll_number=$request->input('roll_number');

        $students = Student::all();

        if ($request->has('roll_number')) {


            $students = $students->where('roll_number', '=', $roll_number);
//            $students = $students->where(DB::raw('upper(students->roll_number)'), "LIKE", "%".strtoupper($roll_number[0])."%");
        }

        if ($request->has('fall')) {
            $students = $students->where('fall', '=', $fall);
        }

        if ($request->has('degree')) {
            $students = $students->where('degree', '=', $degree);
        }

        $students = $students->toArray();
        
        return view ('student.index', compact('students', 'degree' , 'fall','roll_number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("student.create");
    }
    public function freeze($requst)
    {
        $student=Student::all()->where('roll_number','=',request('r_number'))->toArray();

        if(!empty($student))
        {
            return redirect('/student/create')->with('danger','Student is already Exists');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=Student::all()->where('roll_number','=',request('r_number'))->toArray();

        if(!empty($student))
        {
            return redirect('/student/create')->with('danger','Student is already Exists');
        }
        $student = new Student;
        $student->roll_number = request('r_number');
        $student->name = request('s_name');
        $student->contact = request('s_contact');
        $student->timestamps = false;
        $student->status = request('s_status');
        $student->degree = request('s_degree');
        $student->degree_title = request('s_degree_title');
        $student->Cr_Hr = request('c_horse');
        $student->synopsis  = false;
        $student->fall = request('year');

        $student->save();

        return redirect('/student/create')->with('success','Student Successfully Enter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);

        
        $synopsis =Synopsis::all()->where('student_id' , '=' , $id)->toArray();
        $extensions = Extension::all()->where('student_id' , '=' , $id)->toArray();
        $progress=Progress::all()->where('student_id','=',$id)->toArray();
        $p_h_d_progresses=PHDProgress::all()->where('student_id','=', $id)->toArray();
        $theses=Thesis::all()->where('student_id','=',$id)->toArray();
        $previousregistrations=Previousregistration::all()->where('student_id','=',$id)->toArray();
        $previousextension=Previousextension::all()->where('student_id','=',$id)->toArray();
        $examiners=Examiner::all()->where('student_id','=',$id)->toArray();
        $previousexaminor=Previousexaminor::all()->where('student_id','=',$id)->toArray();
        $previoussynopses=Previoussynopsis::all()->where('student_id','=',$id)->toArray();
        $clears=Clear::all()->where('student_id','=',$id)->toArray();
        return view ('student.show', compact('student', 'id','synopsis','theses', 'progress','extensions','examiners','p_h_d_progresses','previousregistrations','previousextension','previousexaminor','previoussynopses','clears'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit',compact('student','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->roll_number =$request->get('roll_number');
        $student->name = $request->get('name');
        $student->contact = $request->get('contact');
        $student->timestamps = false;
        $student->status = $request->get('status');
        $student->degree = $request->get('degree');
        $student->degree_title = $request->get('degree_title');
        $student->Cr_Hr = $request->get('Credit_Hourse');
        $student->synopsis  = false;
        $student->fall = $request->get('fall');

        $student->save();

        return redirect('/student')->with('success','Student Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $thesis=Thesis::where('student_id','=',$id);
        $progress=Progress::where('student_id','=',$id);
        $extensions = Extension::where('student_id' , '=' , $id);
        $student->delete();
        $thesis->delete();
        $progress->delete();
        $extensions->delete();
        return redirect('student')->with('success','All Student Record is Deleted');
    }
}