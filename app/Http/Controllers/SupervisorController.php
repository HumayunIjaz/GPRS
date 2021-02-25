<?php

namespace App\Http\Controllers;

use App\Student;
use App\Supervisor;
use App\Thesis;
use App\Synopsis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors=Supervisor::all()->toArray();
        return view ('supervisor.index', compact('supervisors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('supervisor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value=Supervisor::all()->where('name','=',request('sup_name'))->toArray();

        if(!empty($value))
        {
            return redirect('/supervisor/create')->with('danger','Supervisor Name is already Exists');
        }
        $supervisor = new Supervisor;
        $supervisor->name = request('sup_name');
        $supervisor->designation = request('sup_desig');
        $supervisor->timestamps= true;

        $supervisor->save();

        return redirect('/supervisor/create')->with('danger','Supervisor Name Successfully Enter');;

    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {

            $supervisor=Supervisor::where('name','=',$name)->get()  ;

        $synopses= DB::table('synopses')
            ->join('students', 'students.id', '=', 'synopses.student_id')
            ->select('synopses.*', 'students.*')
            ->where('synopses.supervisor', '=', $name)
            ->orWhere('synopses.csupervisor', '=', $name)
            ->get();

        $theses= DB::table('theses')
                 ->join('students', 'students.id', '=', 'theses.student_id')
                 ->select('theses.*', 'students.*')
                ->where('theses.supervisor', '=', $name)
                ->orWhere('theses.csupervisor', '=', $name)
                ->get();

        //print_r($theses);

//        $student=Student::all();
//
//        if(!empty($thesis)) {
//
//            $student = $student::where('id', '=', $theses)->get();
//            $theses=$theses::where('supervisor','=',$name)->get();
//        }

        return view('supervisor.show',compact('name','theses','synopses','supervisor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supervisors= Supervisor::find($id);
        return view('supervisor.edit', compact('supervisors', 'id'));
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
        $supervisor=Supervisor::find($id);
        $supervisor->name=$request->get('name');
        $supervisor->designation=$request->get('designation');

        $supervisor->save();
        return redirect('supervisor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supervisors=Supervisor::find($id);
        print_r($supervisors);
        $supervisors->delete();
        return redirect('supervisor')->with('success','Supervisor Record is Deleted');

    }
}
