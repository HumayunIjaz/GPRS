<?php

namespace App\Http\Controllers;

use App\Progress;
use App\Student;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progress=Progress::all()->toArray();
        return view("progress.index",compact('progress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("progress.create")->with('rollno_invalid', false);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $progress=new Progress;
        $student = Student::where('roll_number', '=' , request('r_number'))->where('degree','=','MPhil')->get();
        if($student->isEmpty())
        {
            return redirect('/progress/create')->with('danger','Student Roll Number is Not Exists');
        }
        $value = Progress::all()->where('student_id', '=', $student[0]->id)->toArray();

        if(!empty($value))
        {
            return redirect('/progress/create')->with('danger','Student Data is already Exists');
        }



        $progress->pro1=request('Report1');
        if(!empty(request('Report2')))
        {
            if(empty(request('Report1')))
            {
                return redirect('/progress/create')->with('danger','Progress Report 1 is not Exists in System');
            }
            $progress->pro2=request('Report2');
        }
        if(!empty(request('Report3')))
        {
            if(empty(request('Report2')))
            {
                return redirect('/progress/create')->with('danger','Progress Report 2 is not Exists in System');
            }
            $progress->pro2=request('Report3');
        }
        if(!empty(request('Report4')))
        {
            if(empty(request('Report3')))
            {
                return redirect('/progress/create')->with('danger','Progress Report 3 is not Exists in System');
            }
            $progress->pro2=request('Report2');
        }
        if(!empty(request('Report5')))
        {
            if(empty(request('Report4')))
            {
                return redirect('/progress/create')->with('danger','Progress Report 4 is not Exists in System');
            }
            $progress->pro2=request('Report5');
        }
        if(!empty(request('Report6')))
        {
            if(empty(request('Report5')))
            {
                return redirect('/progress/create')->with('danger','Progress Report 5 is not Exists in System');
            }
            $progress->pro2=request('Report6');
        }
        if(!empty(request('Report7')))
        {
            if(empty(request('Report6')))
            {
                return redirect('/progress/create')->with('danger','Progress Report 6 is not Exists in System');
            }
            $progress->pro2=request('Report7');
        }
        $progress->sms1=request('semes1');
        if(!empty(request('sems2')))
        {
            if(empty(request('semes1')))
            {
                return redirect('/progress/create')->with('danger','Semester 1 Fee is not Exists in System');
            }
            $progress->pro2=request('sems1');
        }
        if(!empty(request('sems3')))
        {
            if(empty(request('semes2')))
            {
                return redirect('/progress/create')->with('danger','Semester 2 Fee is not Exists in System');
            }
            $progress->pro2=request('sems3');
        }
        if(!empty(request('sems4')))
        {
            if(empty(request('semes3')))
            {
                return redirect('/progress/create')->with('danger','Semester 3 Fee is not Exists in System');
            }
            $progress->pro2=request('sems4');
        }
        if(!empty(request('tne2')))
        {
            if(empty(request('tne1')))
            {
                return redirect('/progress/create')->with('danger','Tenure 1 Fee is not Exists in System');
            }
            $progress->pro2=request('tne2');
        }
        if(!empty(request('tne3')))
        {
            if(empty(request('tne2')))
            {
                return redirect('/progress/create')->with('danger','Tenure 2 Fee is not Exists in System');
            }
            $progress->pro2=request('tne3');
        }
        if(!empty(request('tne4')))
        {
            if(empty(request('tne3')))
            {
                return redirect('/progress/create')->with('danger','Tenure 3 Fee is not Exists in System');
            }
            $progress->pro2=request('tne2');
        }
        $progress->student_id = $student[0]->id;
        $progress->timestamps=false;

        $progress->save();

        return redirect('progress/create')->with('success','Student Data is Successfully Enter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $id)
    {
        $progress=Progress::find($id);
        return view('progress.show',compact('progress', 'id'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $progress=Progress::where('student_id','=',$id)->get();
        if($progress->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Progress Data is Not Exists');
        }
        return view('progress.edit',compact('progress','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $progress= Progress::find($id);

        if(!empty(request('pro1')))
        {
            if(empty(request('semes3')))
            {
                return redirect()->back()->with('danger','Semester 3 Fee is not Exists in System');
            }
            $progress->pro1=$request->get('pro1');
        }
        if(!empty(request('pro2')))
        {
            if(empty(request('pro1')))
            {
                return redirect()->back()->with('danger','Progress Report 1 is not Exists in System');
            }
            $progress->pro2=$request->get('pro3');
        }
        if(!empty(request('pro3')))
        {
            if(empty(request('pro2')))
            {
                return redirect()->back()->with('danger','Progress Report 2 is not Exists in System');
            }
            $progress->pro2=$request->get('pro3');
        }
        if(!empty(request('pro4')))
        {
            if(empty(request('pro3')))
            {
                return redirect()->back()->with('danger','Progress Report 3 is not Exists in System');
            }
            $progress->pro2=$request->get('pro4');
        }
        if(!empty(request('pro5')))
        {
            if(empty(request('pro4')))
            {
                return redirect()->back()->with('danger','Progress Report 4 is not Exists in System');
            }
            $progress->pro2=$request->get('pro5');
        }
        if(!empty(request('pro6')))
        {
            if(empty(request('pro5')))
            {
                return redirect()->back()->with('danger','Progress Report 5 is not Exists in System');
            }
            $progress->pro2=$request->get('pro6');
        }
        if(!empty(request('pro7')))
        {
            if(empty(request('pro6')))
            {
                return redirect()->back()->with('danger','Progress Report 6 is not Exists in System');
            }
            $progress->pro2=$request->get('pro7');
        }
        if(!empty(request('pro7')))
        {
            if(empty(request('pro6')))
            {
                return redirect()->back()->with('danger','Progress Report 6 is not Exists in System');
            }
            $progress->pro2=$request->get('pro7');
        }
        $progress->sms1=$request->get('semes1');
        if(!empty(request('semes2')))
        {
            if(empty(request('semes1')))
            {
                return redirect()->back()->with('danger','Semester 1 Fee is not Exists in System');
            }
            $progress->sms2=$request->get('semes2');
        }
        if(!empty(request('semes3')))
        {
            if(empty(request('semes2')))
            {
                return redirect()->back()->with('danger','Semester 2 Fee is not Exists in System');
            }
            $progress->sms3=$request->get('semes3');
        }
        if(!empty(request('semes4')))
        {
            if(empty(request('semes3')))
            {
                return redirect()->back()->with('danger','Semester 3 Fee is not Exists in System');
            }
            $progress->sms4=$request->get('semes4');
        }
        if(!empty(request('tne1')))
        {
            if(empty(request('semes4')))
            {
                return redirect()->back()->with('danger','Semester 4 Fee is not Exists in System');
            }
            $progress->tne1=$request->get('tne1');
        }
        if(!empty(request('tne2')))
        {
            if(empty(request('tne1')))
            {
                return redirect()->back()->with('danger','Tenure 1 Fee is not Exists in System');
            }
            $progress->tne2=$request->get('tne2');
        }
        if(!empty(request('tne3')))
        {
            if(empty(request('tne2')))
            {
                return redirect()->back()->with('danger','Tenure 2 Fee is not Exists in System');
            }
            $progress->tne3=$request->get('tne3');
        }
        if(!empty(request('tne4')))
        {
            if(empty(request('tne3')))
            {
                return redirect()->back()->with('danger','Tenure 3 Fee is not Exists in System');
            }
            $progress->tne3=$request->get('tne4');
        }

        $progress->timestamps=false;

        $progress->save();

        return redirect()->back()->with('success','Progress Report Data is Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Progress  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $progress=Progress::find($id);

        $progress->delete();

        return redirect('progress');
    }
}
