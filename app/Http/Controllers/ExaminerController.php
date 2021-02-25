<?php

namespace App\Http\Controllers;

use App\Examiner;
use App\Student;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class ExaminerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examinor=Examiner::all()->toArray();
        return view('examiner.index',compact('examinor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("examiner.create")->with('rollno_invalid',false);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examinor=New Examiner();

        $student = Student::where('roll_number', '=' , request('r_number') )->get();
        if($student->isEmpty())
        {
            return view('examiner/create')->with('rollno_invalid',true);

        }
        $value=Examiner::all()->where('student_id','=',$student[0]->id)->toArray();

        if(!empty($value))
        {
            return redirect('/examiner/create')->with('danger','Student Data is already Exists');
        }
        $examinor->student_id = $student[0]->id;
        $examinor->reconm=request('recommend');
        $examinor->examdpc=request('examdpcnumber');
        $examinor->diary_no=request('examdiary');
        $examinor->examdate=request('examdate');
        $examinor->timestamps=true;

        $examinor->save();

        return redirect('/examiner/create')->with('success','Student Examiner Data is Successfully Enter');
    }

    public function add(Request $request,$id)
    {
        $examinor=Examiner::find($id);

        DB::table('previousexaminors')->insert(['student_id'=> $examinor->student_id,'reconm' => $examinor->reconm, 'examdpc'=>$examinor->examdpc,
                                        'diary_no'=>$examinor->diary_no,'examdate'=>$examinor->examdate]);

        $examinor->reconm=request('recommend');
        $examinor->examdpc=request('examdpcnumber');
        $examinor->diary_no=request('examdiary');
        $examinor->examdate=request('examdate');
        $examinor->timestamps=false;

        $examinor->save();

        return redirect('/examiner/create')->with('success','New Examiner Data is Successfully Enter');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Examiner  $examiner
     * @return \Illuminate\Http\Response
     */
    public function show(Examiner $id)
    {
        $examinors=Examiner::find($id);
        return view('examinors.edit',compact('examinors','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examiner  $examiner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examinors=Examiner::where('student_id','=',$id)->get();
        if($examinors->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Examiner Data is Not Exists');

        }
        return view('examiner.edit',compact('examinors','id'));
    }

    public function change($id)
    {
        $student=Student::find($id);
        $examiner=Examiner::where('student_id','=',$student->id)->get();
        if($examiner->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Examiner Data is Not Exists');

        }
        return view('examiner.change',compact('examiner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examiner  $examiner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $examiners=Examiner::find($id);
        print_r($examiners);
        $examiners->reconm=$request->get('reconm');
        $examiners->examdpc=$request->get('examdpc');
        $examiners->diary_no=$request->get('diary_no');
        $examiners->examdate=$request->get('examdate');
        $examiners->timestamps=false;
        $examiners->save();

        return redirect('student')->with('success','Examiner Data is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examiner  $examiner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examiner $examiner)
    {
        //
    }
}
