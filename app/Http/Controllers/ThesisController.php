<?php

namespace App\Http\Controllers;

use App\Clear;
use App\Student;
use App\Synopsis;
use App\Thesis;
use App\Supervisor;
use Illuminate\Http\Request;
use input;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Storage;
class ThesisController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thesiss= Thesis::all()->toArray();
        return view ('thesis.index',compact('thesiss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supervisors = Supervisor::all();
//        dd($supervisors);

        $data = [
            'rollno_invalid'  => false,
            'supervisors'   => $supervisors
        ];

        return view('thesis.create')->with($data);
    }

    public function clear($id)
    {
        $student=Student::find($id);
        $thesis=Thesis::where('student_id','=',$student->id)->get();
        $synopses=Synopsis::where('student_id','=',$student->id)->get();
        if($thesis->isEmpty()) {
            if ($synopses->isEmpty()) {
                return redirect('/student/' . $id)->with('danger', 'Data is Not Exists');
            }

          elseif($synopses->isNotEmpty())
          {
              return view('synopsis.clear',compact('synopses'));
          }
              return redirect('/student/'.$id)->with('danger','Thesis Data is Not Exists');
       }

        return view('thesis.clear',compact('thesis','synopses'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $thesis= new Thesis();

        $student = Student::where('roll_number', '=' , request('r_number'))->where('degree','=','MPhil')->get();
        if($student->isEmpty())
        {
            return view('thesis.create')->with('rollno_invalid', true);
        }
        $value = Thesis::all()->where('student_id', '=', $student[0]->id)->toArray();

        if(!empty($value))
        {
            return redirect('/thesis/create')->with('danger','Student Data is already Exists');
        }

        $thesis->dairy_no=request('Fnumber');
        $thesis->date=request('Fdate');
        $thesis->title=request('title');
        $thesis->supervisor=request('Tsupervisor');
        if(request('Tsupervisor')==request('csupervisor'))
        {
            return redirect()->back()->with('danger','Supervisor Same Name is Not Allowed');
        }
        else{
            $thesis->csupervisor=request('csupervisor');
        }
        $thesis->recomnddpcc=request('recommendation');
        $thesis->dpc=request('Ddairy');
        $thesis->DNo=request('Dnumber');
        $thesis->date1=request('Ddate');
        if($request->hasFile('file')) {

            $thesis->pdf_file=$request->file->store('public/thesis');
        }
        $thesis->student_id = $student[0]->id;
        $thesis->timestamps=true;
        $thesis->save();

        return redirect('/thesis/create')->with('success','Student Data is Successfully Enter');
    }

    public function add(Request $request, $id)
    {
        $thesis=Thesis::find($id);

        DB::table('previousregistrations')->insert(['student_id' => $thesis->student_id, 'dairy_no'=>$thesis->dairy_no,'date'=>$thesis->date,'title'=>$thesis->title
            ,'supervisor'=>$thesis->supervisor,'csupervisor'=>$thesis->csupervisor,'recomnddpcc'=>$thesis->recomnddpcc,'pdf_file'=>$thesis->pdf_file,'date'=>$thesis->date,'dpc'=>$thesis->dpc,'DNo'=>$thesis->DNo,'date1'=>$thesis->date1]);

        $thesis->supervisor=request('tsupervisor');
        if(request('tsupervisor')==request('tcsupervisor'))
        {

        }
        else{
            $thesis->csupervisor=request('tcsupervisor');
        }

        $thesis->dairy_no=request('dairy_no');
        $thesis->date=request('date');
        $thesis->title=request('title');
        $thesis->recomnddpcc=request('recommendation');
        $thesis->dpc=request('dpc');
        $thesis->DNo=request('DNo');
        $thesis->date1=request('Ddate');
        if($request->hasFile('filechange')) {

            $thesis->pdf_file=$request->filechange->store('public/changethesis');
        }
        $thesis->timestamps=false;

        $thesis->save();

        return redirect('/student')->with('success','Student Add Data is Successfully Enter');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theses=Thesis::find($id);
        return view('thesis.show',compact('theses','id' ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supervisors=Supervisor::all();
        $theses=Thesis::where('student_id','=',$id)->get();
        if($theses->isEmpty())
        {
            return redirect('/student/')->with('danger','Thesis Data is Not Exists');

        }
        return view('thesis.edit',compact('theses','supervisors'));

    }
    public function change($id)
    {
        $supervisors=Supervisor::all();
        $student=Student::find($id);
        $theses=Thesis::where('student_id','=',$student->id)->get();
        if($theses->isEmpty())
        {
            return redirect('/student/')->with('danger','Thesis Data is Not Exists');

        }
        return view('thesis.change',compact('theses','supervisors'));

    }

    public function move($id)
    {

        $theses=Thesis::find($id);
        $synopses=Synopsis::find($id);

        if(!empty($theses)) {
            DB::table('previousregistrations')->insert(['student_id' => $theses->student_id, 'dairy_no' => $theses->dairy_no, 'date' => $theses->date, 'title' => $theses->title
                , 'supervisor' => $theses->supervisor, 'csupervisor' => $theses->csupervisor, 'date' => $theses->date, 'dpc' => $theses->dpc, 'DNo' => $theses->DNo, 'date1' => $theses->date1]);


            $clear = new Clear();

            $clear->student_id = $theses->student_id;
            $clear->status = request('status');
            $clear->passdate = request('passdate');
            $theses->destroy($id);
            $clear->save();

            return redirect('/student/')->with('success', 'Student Clearance Form Successfully Enter');
        }
        elseif(!empty($synopses))
        {

            DB::table('previoussynopses')->insert(['student_id' => $synopses->student_id, 'dairy_no' => $synopses->dairy_no, 'date' => $synopses->date, 'title' => $synopses->title, 'supervisor' => $synopses->supervisor, 'csupervisor' => $synopses->csupervisor, 'dpc' => $synopses->dpc, 'DNo' => $synopses->DNo, 'date1' => $synopses->date1,
                'synopsis_dpcc' => $synopses->synopsis_dpcc, 'dpcc_date' => $synopses->dpcc_date, 'synopsis_asrb' => $synopses->synopsis_asrb, 'asrb_date' => $synopses->asrb_date,]);

            DB::table('synopses')->where('id','=',$id)->delete();

            $clear = new Clear();
            $clear->student_id = $synopses->student_id;
            $clear->status = request('status');
            $clear->passdate = request('passdate');
            $synopses->destroy($id);

            $clear->save();

            return redirect('/student/')->with('success', 'Student Clearance Form Successfully Enter');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $theses=Thesis::find($id);
        $theses->dairy_no=$request->get('dairy_no');
        $theses->date=$request->get('date');
        $theses->title=$request->get('ttitle');
        $theses->supervisor=$request->get('tsupervisor');
        if(request('tsupervisor')==request('tcsupervisor'))
        {
            return redirect()->back()->with('danger','Supervisor Same Name is Not Allowed');
        }
        else{
            $theses->csupervisor=$request->get('tcsupervisor');
        }

        $theses->dpc=$request->get('tdpc');
        $theses->DNo=$request->get('tDNo');
        $theses->date1=$request->get('tDdate');
        if($request->hasFile('file')) {

            $theses->pdf_file=$request->filechange->store('public/thesis');
            $theses->save();

        }

        $theses->timestamps=true;


        return redirect('student')->with('success','Thesis Data is Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
