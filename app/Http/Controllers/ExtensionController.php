<?php

namespace App\Http\Controllers;

use App\Extension;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class ExtensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extensions= Extension::all()->toArray();
        return view('extension.index',compact('extensions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("extension.create")->with('rollno_invalid',false);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension=new Extension();
        $student = Student::where('roll_number', '=' , request('r_number') )->get();
        if($student->isEmpty())
        {
            return view('extension/create')->with('rollno_invalid',true);

        }
        $value=Extension::all()->where('student_id','=',$student[0]->id)->toArray();

        if(!empty($value))
        {
            return redirect('/extension/create')->with('danger','Student Data is already Exists');
        }

        $extension->student_id = $student[0]->id;
        $extension->diary_no=request('enumber');
        $extension->date=request('date');
        $extension->dpc_no=request('dpc_no');
        $extension->dpc=request('dpcnumber');
        $extension->dpcdate=request('dpcdate');
        $extension->dpcreomnd=request('recommendation');
        $extension->dpcc=request('dpcc');
        $extension->dpccdate=request('dpccdate');
        $extension->asrb=request('asrb');
        $extension->asrbdate=request('asrbdate');
        $extension->extension=request('extension');
        $extension->timestamps=false;

        $extension->save();

        return redirect('/extension/create')->with('success','Student Data insert Successfully');
    }

    public function add(Request $request, $id)
    {
        $extensions=Extension::find($id);

        DB::table('previousextensions')->insert(['student_id' => $extensions->student_id, 'dairy_no'=>$extensions->diary_no,'date'=>$extensions->date,'dpc_no'=>$extensions->dpc_no,'dpc'=>$extensions->dpc,'dpcdate'=>$extensions->dpcdate
                ,'dpcreomnd'=>$extensions->dpcreomnd,'dpcc'=>$extensions->dpcc,'dpccdate'=>$extensions->dpccdate,'asrb'=>$extensions->asrb,'asrbdate'=>$extensions->asrbdate,'extension'=>$extensions->extension]);

        $extensions->diary_no=request('dairy_no');
        $extensions->date=request('date');
        $extensions->dpc_no=request('dpc_no');
        $extensions->dpc=request('dpcnumber');
        $extensions->dpcdate=request('dpcdate');
        $extensions->dpcreomnd=request('recommendation');
        $extensions->dpcc=request('dpcc');
        $extensions->dpccdate=request('dpccdate');
        $extensions->asrb=request('asrb');
        $extensions->asrbdate=request('asrbdate');
        $extensions->extension=request('extension');
        $extensions->timestamps=false;

        $extensions->save();

        return redirect('/extension/create')->with('success','New Student Data is Successfully Insert');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Extension  $extension
     * @return \Illuminate\Http\Response
     */
    public function show(Extension $id)
    {
        $extension=Extension::find($id);
        return view('student.sow',compact('extension','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extension  $extension
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $extension=Extension::where('student_id','=',$id)->get();
        if($extension->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Extension Data is Not Exists');

        }
        return view('extension.edit',compact('extension','id'));
    }

    public function change($id)
    {
        $student=Student::find($id);
        $extensions=Extension::where('student_id','=',$student->id)->get();
        if($extensions->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Extension Data is Not Exists');

        }
        return view('extension.change',compact('extensions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extension  $extension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $extension= Extension::find($id);
        $extension->diary_no=$request->get('diary_no');
        $extension->date=$request->get('date');
        $extension->dpc_no=$request->get('dpc_no');
        $extension->dpc=$request->get('dpc');
        $extension->dpcdate=$request->get('dpcdate');
        $extension->dpcreomnd=$request->get('dpcreomnd');
        $extension->dpcc=$request->get('dpcc');
        $extension->dpccdate=$request->get('dpccdate');
        $extension->asrb=$request->get('asrb');
        $extension->asrbdate=$request->get('asrbdate');
        $extension->extension=$request->get('extension');
        $extension->timestamps=false;

        $extension->save();

        return redirect('student')->with('success','Extension Data is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extension  $extension
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extension=Extension::find($id);
        $extension->delete();
        return redirect('extension');
    }
}
