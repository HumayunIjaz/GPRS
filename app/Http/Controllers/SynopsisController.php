<?php

namespace App\Http\Controllers;

use App\Clear;
use App\Student;
use App\Supervisor;
use App\Synopsis;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Storage;
class SynopsisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $synopsiss=Synopsis::all()->toArray();
        return view ('synopsis.index',compact('synopsiss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $supervisors = Supervisor::all();
        $data = [
            'rollno_invalid'  => false,
            'supervisors'   => $supervisors
        ];
        return view('synopsis.create')->with($data);
    }
//    public function clear($id)
//    {
//        print_r($id);
//        $synopsis=Synopsis::find($id);
//               return view('synopsis.clear',compact('synopsis'));
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$supervisors=Supervisor::all();
        $synopsis=new Synopsis();

        $student = Student::where('roll_number', '=' , request('r_number'))->where('degree','=','PhD')->get();

        if($student->isEmpty())
        {
            return view('synopsis/create')->with('rollno_invalid',true);

        }

        $val=Synopsis::all()->where('student_id','=',$student[0]->id)->toArray();

        if (!empty($val))
        {
            return redirect('/synopsis/create')->with('danger','Data is already Exists');
        }

        $synopsis->dairy_no=request('SFnumber');
        $synopsis->date=request('SFdate');
        $synopsis->title=request('Stitle');
        $synopsis->supervisor=request('STsupervisor');
        if('STsupervisor'=='Scsupervisor')
        {
            return redirect()->back()->with('danger','Supervisor Same Name is Not Allowed');

        }
        else{
            $synopsis->csupervisor=request('Scsupervisor');
        }

        $synopsis->recomnddpcc=request('recommendation');
        $synopsis->dpc=request('SDdairy');
        $synopsis->DNo=request('SDnumber');
        $synopsis->date1=request('SDdate');
        $synopsis->synopsis_dpcc=request('Sdpccdairy');
        $synopsis->dpcc_date=request('Sdpccdate');
        $synopsis->synopsis_asrb=request('SAdairy');
        $synopsis->asrb_date=request('SAdate');
        $synopsis->student_id = $student[0]->id;
        if($request->hasFile('file')) {
            $synopsis->pdf_file=$request->file->store('public/synopsis');
        }
        if($request->hasFile('asrbfile')) {

            $synopsis->asrbpdf_file=$request->file->store('public/asrb');
        }
//        $image=$request->file('file');
//        $synopsis['pdf_file']=time().'.'.$image->getClientOriginalExtension();
//        $destinationPath=public_path('/file');
//        $image->move($destinationPath,$synopsis['pdf_file']);
        $synopsis->timestamps=true;

        $synopsis->save();

        return redirect()->back()->with('success','Synopsis Data is Successfully Enter');

    }

    public function add(Request $request,$id)
    {
        $synopses=Synopsis::find($id);

        DB::table('previoussynopses')->insert(['student_id' => $synopses->student_id, 'dairy_no'=>$synopses->dairy_no,'date'=>$synopses->date,'title'=>$synopses->title,'supervisor'=>$synopses->supervisor,'csupervisor'=>$synopses->csupervisor,'dpc'=>$synopses->dpc,'DNo'=>$synopses->DNo,'date1'=>$synopses->date1,
            'synopsis_dpcc'=>$synopses->synopsis_dpcc,'pdf_file'=>$synopses->pdf_file,'dpcc_date'=>$synopses->dpcc_date,'synopsis_asrb'=>$synopses->synopsis_asrb,'asrb_date'=>$synopses->asrb_date,'asrbpdf_file'=>$synopses->asrbpdf_file,]);

        $synopses->supervisor=$request->get('supervisor');
        $synopses->csupervisor=$request->get('csupervisor');
        if(request('supervisor')==request('Dcsupervisor'))
        {
            return redirect()->back()->with('danger','Supervisor Same Name is Not Allowed');

        }

        $synopses->dairy_no=$request->get('SFnumber');
        $synopses->date=$request->get('SFdate');
        $synopses->title=$request->get('Stitle');
        $synopses->recomnddpcc=$request->get('recommendation');
        $synopses->dpc=$request->get('SDdairy');
        $synopses->DNo=$request->get('SDnumber');
        $synopses->date1=$request->get('SDdate');
        $synopses->synopsis_dpcc=$request->get('Sdpccdairy');
        $synopses->dpcc_date=$request->get('Sdpccdate');
        $synopses->synopsis_asrb=$request->get('SAdairy');
        $synopses->asrb_date=$request->get('SAdate');

        if($request->hasFile('file')) {
            $synopses->pdf_file=$request->file->store('public/changesynopsis');
        }
        if($request->hasFile('asrbfile')) {

            $synopses->asrbpdf_file=$request->file->store('public/changeasrb');
        }
        $synopses->timestamps=true;

        $synopses->save();

        return redirect('student')->with('success','New Synopsis Data is Successfully Enter');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $synopsis=Synopsis::find($id);
        return view('synopsis.show',compact('synopsis','id' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supervisors=Supervisor::all();
        $synopsis=Synopsis::where('student_id','=',$id)->get();
        if($synopsis->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Synopsis Data is Not Exists');
        }
        return view('synopsis.edit',compact('synopsis','supervisors'));
    }

    public function change($id)
    {
        $supervisors=Supervisor::all();
        $student=Student::find($id);
        $synopsis=Synopsis::where('student_id','=',$student->id)->get();
        print_r($synopsis);
        if($synopsis->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Synopsis Data is Not Exists');
        }
        return view('synopsis.change',compact('synopsis','supervisors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $synopsis=Synopsis::find($id);
        $synopsis->dairy_no=$request->get('dairy_no');
        $synopsis->date=$request->get('date');
        $synopsis->title=$request->get('title');
        $synopsis->supervisor=$request->get('supervisor');
        if($request->supervisor==$request->csupervisor)
        {
            print_r(request('supervisor'));
            return redirect()->back()->with('danger','Supervisor Same Name is Not Allowed');
        }
        else{
            $synopsis->csupervisor=$request->get('csupervisor');
        }

        $synopsis->recomnddpcc=$request->get('recommendation');
        $synopsis->dpc=$request->get('dpc');
        $synopsis->DNo=$request->get('DNo');
        $synopsis->date1=$request->get('date1');
        $synopsis->synopsis_dpcc=$request->get('synopsis_dpcc');
        $synopsis->dpcc_date=$request->get('dpcc_date');
        $synopsis->synopsis_asrb=$request->get('synopsis_asrb');
        $synopsis->asrb_date=$request->get('asrb_date');

            if ($request->hasFile('file')) {

                $synopsis->pdf_file = $request->file->store('public/synopsis');
            }
        if ($request->hasFile('asrbfile')) {

                $synopsis->asrbpdf_file = $request->file->store('public/asrb');

            }
            $synopsis->timestamps=true;

            $synopsis->save();

        return redirect('student')->with('success','Synopsis Data is Successfully Updated');

    }

    public function move($id)
    {

        $student=Student::find($id);
        $synopses=Synopsis::where('student_id','=',$student->id)->get();

            DB::table('previoussynopses')->insert(['student_id' => $synopses->student_id, 'dairy_no' => $synopses->dairy_no, 'date' => $synopses->date, 'title' => $synopses->title, 'supervisor' => $synopses->supervisor, 'csupervisor' => $synopses->csupervisor, 'dpc' => $synopses->dpc, 'DNo' => $synopses->DNo, 'date1' => $synopses->date1,
                'synopsis_dpcc' => $synopses->synopsis_dpcc, 'dpcc_date' => $synopses->dpcc_date, 'synopsis_asrb' => $synopses->synopsis_asrb, 'asrb_date' => $synopses->asrb_date,]);

            DB::table('synopses')->where('student_id', '=', $id)->delete();

            $clear = new Clear();
            $clear->student_id = $synopses->student_id;
            $clear->status = request('status');
            $clear->passdate = request('passdate');
            $synopses->destroy($id);

            $clear->save();

            return redirect('/student/')->with('success', 'Student Clearance Form Successfully Enter');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Synopsis  $synopsis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Synopsis $synopsis)
    {
        //
    }
}
