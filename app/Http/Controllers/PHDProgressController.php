<?php

namespace App\Http\Controllers;

use App\PHDProgress;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class PHDProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pHDProgress = PHDProgress::all()->toArray();
        return view('phdprogress.index',compact('pHDProgress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("phdprogress.create")->with('rollno_invalid', false);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phdprogress = new PHDProgress;

        $student = Student::where('roll_number', '=' , request('r_number'))->where('degree','=','PhD')->get();
        if($student->isEmpty())
        {
            return redirect('/phdprogress/create')->with('danger','Roll Number is Not Exists');

        }
        $value=PHDProgress::all()->where('student_id','=',$student[0]->id)->toArray();
        if (!empty($value))
        {
            return redirect('/phdprogress/create')->with('danger','Data is already Exists');
        }
        if(!empty(request('PHDReport1')))
        {
            if(empty(request('PHDsemes3')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 3 Fee is not Exists in System');
            }
            $phdprogress->phdpro1=request('PHDReport1');
        }
        if(!empty(request('PHDReport2')))
        {
            if(empty(request('PHDReport1')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 1 is not Exists in System');
            }
            $phdprogress->phdpro2=request('PHDReport2');
        }
        if(!empty(request('PHDReport3')))
        {
            if(empty(request('PHDReport2')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 2 is not Exists in System');
            }
            $phdprogress->phdpro3=request('PHDReport3');
        }
        if(!empty(request('PHDReport4')))
        {
            if(empty(request('PHDReport3')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 3 is not Exists in System');
            }
            $phdprogress->phdpro4=request('PHDReport4');
        }
        if(!empty(request('PHDReport5')))
        {
            if(empty(request('PHDReport4')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 4 is not Exists in System');
            }
            $phdprogress->phdpro5=request('PHDReport5');
        }
        if(!empty(request('PHDReport6')))
        {
            if(empty(request('PHDReport5')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 5 is not Exists in System');
            }
            $phdprogress->phdpro6=request('PHDReport6');
        }
        if(!empty(request('PHDReport7')))
        {
            if(empty(request('PHDReport6')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 6 is not Exists in System');
            }
            $phdprogress->phdpro7=request('PHDReport7');
        }
        if(!empty(request('PHDReport8')))
        {
            if(empty(request('PHDReport7')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 7 is not Exists in System');
            }
            $phdprogress->phdpro8=request('PHDReport8');
        }
        if(!empty(request('PHDReport9')))
        {
            if(empty(request('PHDReport8')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 8 is not Exists in System');
            }
            $phdprogress->phdpro9=request('PHDReport9');
        }
        if(!empty(request('PHDReport10')))
        {
            if(empty(request('PHDReport9')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 9 is not Exists in System');
            }
            $phdprogress->phdpro10=request('PHDReport10');
        }
        if(!empty(request('PHDReport11')))
        {
            if(empty(request('PHDReport10')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 10 is not Exists in System');
            }
            $phdprogress->phdpro11=request('PHDReport11');
        }
        if(!empty(request('PHDReport12')))
        {
            if(empty(request('PHDReport11')))
            {
                return redirect('/phdprogress/create')->with('danger','Progress Report 11 is not Exists in System');
            }
            $phdprogress->phdpro12=request('PHDReport12');
        }
        $phdprogress->phdsms1=request('PHDsemes1');
        if(!empty(request('PHDsemes2')))
        {
            if(empty(request('PHDsemes1')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 1 Fee is not Exists in System');
            }
            $phdprogress->phdsms2=request('PHDsemes2');
        }
        if(!empty(request('PHDsemes3')))
        {
            if(empty(request('PHDsemes2')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 2 Fee is not Exists in System');
            }
            $phdprogress->phdsms3=request('PHDsemes3');
        }
        if(!empty(request('PHDsemes4')))
        {
            if(empty(request('PHDsemes3')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 3 Fee is not Exists in System');
            }
            $phdprogress->phdsms4=request('PHDsemes4');
        }
        if(!empty(request('PHDsemes5')))
        {
            if(empty(request('PHDsemes4')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 4 Fee is not Exists in System');
            }
            $phdprogress->phdsms5=request('PHDsemes5');
        }
        if(!empty(request('PHDsemes6')))
        {
            if(empty(request('PHDsemes5')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 5 Fee is not Exists in System');
            }
            $phdprogress->phdsms6=request('PHDsemes6');
        }
        if(!empty(request('PHDsemes7')))
        {
            if(empty(request('PHDsemes6')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 6 Fee is not Exists in System');
            }
            $phdprogress->phdsms7=request('PHDsemes7');
        }
        if(!empty(request('PHDsemes8')))
        {
            if(empty(request('PHDsemes7')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 7 Fee is not Exists in System');
            }
            $phdprogress->phdsms8=request('PHDsemes8');
        }
        if(!empty(request('PHDsemes9')))
        {
            if(empty(request('PHDsemes8')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 8 Fee is not Exists in System');
            }
            $phdprogress->phdsms9=request('PHDsemes9');
        }
        if(!empty(request('PHDsemes10')))
        {
            if(empty(request('PHDsemes9')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 9 Fee is not Exists in System');
            }
            $phdprogress->phdsms10=request('PHDsemes10');
        }
        if(!empty(request('PHDtene1')))
        {
            if(empty(request('PHDsemes10')))
            {
                return redirect('/phdprogress/create')->with('danger','Semester 10 Fee is not Exists in System');
            }
            $phdprogress->phdtne1=request('PHDtene1');
        }
        if(!empty(request('PHDtene2')))
        {
            if(empty(request('PHDtene1')))
            {
                return redirect('/phdprogress/create')->with('danger','Tenure 1 Fee is not Exists in System');
            }
            $phdprogress->phdtne2=request('PHDtene2');
        }
        if(!empty(request('PHDtene3')))
        {
            if(empty(request('PHDtene2')))
            {
                return redirect('/phdprogress/create')->with('danger','Tenure 2 Fee is not Exxists');
            }
            $phdprogress->phdtne3=request('PHDtene3');
        }
        if(!empty(request('PHDtene4')))
        {
            if(empty(request('PHDtene3')))
            {
                return redirect('/phdprogress/create')->with('danger','Tenure 3 Fee is not Exxists');
            }
            $phdprogress->phdtne4=request('PHDtene4');
        }
        $phdprogress->student_id = $student[0]->id;
        $phdprogress->timestamps = false;

        $phdprogress->save();

        return redirect('/phdprogress/create')->with('success','PhD Progres Report Data is Successfully Enter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PHDProgress  $pHDProgress
     * @return \Illuminate\Http\Response
     */
    public function show(PHDProgress $id)
    {
        $pHDProgress = PHDProgress::find($id);
        return view('phdprogress.show',compact('pHDProgress','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PHDProgress  $pHDProgress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pHDProgress=PHDProgress::where('student_id','=',$id)->get();
        if($pHDProgress->isEmpty())
        {
            return redirect('/student/'.$id)->with('danger','Progress Data is Not Exists');

        }
        return view('phdprogress.edit',compact('pHDProgress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PHDProgress  $pHDProgress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pHDProgress=PHDProgress::find($id);
        if(!empty(request('phdpro1')))
        {
            if(empty(request('phdsms3')))
            {
                return redirect()->back()->with('danger','Semester 3 Fee is not Exists in System');
            }
            $pHDProgress->phdpro1=$request->get('phdpro1');
        }
        if(!empty(request('phdpro2')))
        {
            if(empty(request('phdpro1')))
            {
                return redirect()->back()->with('danger','Progress Report 1 is not Exists in System');
            }
            $pHDProgress->phdpro2=$request->get('phdpro2');
        }
        if(!empty(request('phdpro3')))
        {
            if(empty(request('phdpro2')))
            {
                return redirect()->back()->with('danger','Progress Report 2 is not Exists in System');
            }
            $pHDProgress->phdpro3=$request->get('phdpro3');
        }
        if(!empty(request('phdpro4')))
        {
            if(empty(request('phdpro3')))
            {
                return redirect()->back()->with('danger','Progress Report 3 is not Exists in System');
            }
            $pHDProgress->phdpro4=$request->get('phdpro4');
        }
        if(!empty(request('phdpro5')))
        {
            if(empty(request('phdpro4')))
            {
                return redirect()->back()->with('danger','Progress Report 4 is not Exists in System');
            }
            $pHDProgress->phdpro5=$request->get('phdpro5');
        }
        if(!empty(request('phdpro6')))
        {
            if(empty(request('phdpro5')))
            {
                return redirect()->back()->with('danger','Progress Report 5 is not Exists in System');
            }
            $pHDProgress->phdpro6=$request->get('phdpro6');
        }
        if(!empty(request('phdpro7')))
        {
            if(empty(request('phdpro6')))
            {
                return redirect()->back()->with('danger','Progress Report 6 is not Exists in System');
            }
            $pHDProgress->phdpro7=$request->get('phdpro7');
        }
        if(!empty(request('phdpro8')))
        {
            if(empty(request('phdpro7')))
            {
                return redirect()->back()->with('danger','Progress Report 7 is not Exists in System');
            }
            $pHDProgress->phdpro8=$request->get('phdpro8');
        }
        if(!empty(request('phdpro9')))
        {
            if(empty(request('phdpro8')))
            {
                return redirect()->back()->with('danger','Progress Report 8 is not Exists in System');
            }
            $pHDProgress->phdpro9=$request->get('phdpro9');
        }
        if(!empty(request('phdpro10')))
        {
            if(empty(request('phdpro9')))
            {
                return redirect()->back()->with('danger','Progress Report 9 is not Exists in System');
            }
            $pHDProgress->phdpro10=$request->get('phdpro10');
        }
        if(!empty(request('phdpro11')))
        {
            if(empty(request('phdpro10')))
            {
                return redirect()->back()->with('danger','Progress Report 10 is not Exists in System');
            }
            $pHDProgress->phdpro11=$request->get('phdpro11');
        }
        if(!empty(request('phdpro12')))
        {
            if(empty(request('phdpro11')))
            {
                return redirect()->back()->with('danger','Progress Report 11 is not Exists in System');
            }
            $pHDProgress->phdpro12=$request->get('phdpro12');
        }
        $pHDProgress->phdsms1=$request->get('phdsms1');
        if(!empty(request('phdsms2')))
        {
            if(empty(request('phdsms1')))
            {
                return redirect()->back()->with('danger','Semester 1 Fee is not Exists in System');
            }
            $pHDProgress->phdsms2=$request->get('phdsms2');
        }
        if(!empty(request('phdsms3')))
        {
            if(empty(request('phdsms2')))
            {
                return redirect()->back()->with('danger','Semester 2 Fee is not Exists in System');
            }
            $pHDProgress->phdsms3=$request->get('phdsms3');
        }
        if(!empty(request('phdsms4')))
        {
            if(empty(request('phdsms3')))
            {
                return redirect()->back()->with('danger','Semester 3 Fee is not Exists in System');
            }
            $pHDProgress->phdsms4=$request->get('phdsms4');
        }
        if(!empty(request('phdsms5')))
        {
            if(empty(request('phdsms4')))
            {
                return redirect()->back()->with('danger','Semester 4 Fee is not Exists in System');
            }
            $pHDProgress->phdsms5=$request->get('phdsms5');
        }
        if(!empty(request('phdsms6')))
        {
            if(empty(request('phdsms5')))
            {
                return redirect()->back()->with('danger','Semester 5 Fee is not Exists in System');
            }
            $pHDProgress->phdsms6=$request->get('phdsms6');
        }
        if(!empty(request('phdsms7')))
        {
            if(empty(request('phdsms6')))
            {
                return redirect()->back()->with('danger','Semester 6 Fee is not Exists in System');
            }
            $pHDProgress->phdsms7=$request->get('phdsms7');
        }
        if(!empty(request('phdsms8')))
        {
            if(empty(request('phdsms7')))
            {
                return redirect()->back()->with('danger','Semester 7 Fee is not Exists in System');
            }
            $pHDProgress->phdsms8=$request->get('phdsms8');
        }
        if(!empty(request('phdsms9')))
        {
            if(empty(request('phdsms8')))
            {
                return redirect()->back()->with('danger','Semester 8 Fee is not Exists in System');
            }
            $pHDProgress->phdsms9=$request->get('phdsms9');
        }
        if(!empty(request('phdsms10')))
        {
            if(empty(request('phdsms9')))
            {
                return redirect()->back()->with('danger','Semester 9 Fee is not Exists in System');
            }
            $pHDProgress->phdsms10=$request->get('phdsms10');
        }
        if(!empty(request('phdtne1')))
        {
            if(empty(request('phdsms10')))
            {
                return redirect()->back()->with('danger','Semester 10 Fee is not Exists in System');
            }
            $pHDProgress->phdtne1=$request->get('phdtne1');
        }
        if(!empty(request('phdtne2')))
        {
            if(empty(request('phdtne1')))
            {
                return redirect()->back()->with('danger','Tenure 1 Fee is not Exists in System');
            }
            $pHDProgress->phdtne2=$request->get('phdtne2');
        }
        if(!empty(request('phdtne3')))
        {
            if(empty(request('phdtne2')))
            {
                return redirect()->back()->with('danger','Tenure 2 Fee is not Exxists');
            }
            $pHDProgress->phdtne3=$request->get('phdtne3');
        }
        if(!empty(request('phdtne4')))
        {
            if(empty(request('phdtne3')))
            {
                return redirect()->back()->with('danger','Tenure 3 Fee is not Exxists');
            }
            $pHDProgress->phdtne4=$request->get('phdtne4');
        }
        $pHDProgress->phdpro1=$request->get('phdpro1');
        $pHDProgress->phdpro2=$request->get('phdpro2');
        $pHDProgress->phdpro3=$request->get('phdpro3');
        $pHDProgress->phdpro4=$request->get('phdpro4');
        $pHDProgress->phdpro5=$request->get('phdpro5');
        $pHDProgress->phdpro6=$request->get('phdpro6');
        $pHDProgress->phdpro7=$request->get('phdpro7');
        $pHDProgress->phdpro8=$request->get('phdpro8');
        $pHDProgress->phdpro9=$request->get('phdpro9');
        $pHDProgress->phdpro10=$request->get('phdpro10');
        $pHDProgress->phdpro11=$request->get('phdpro11');
        $pHDProgress->phdpro12=$request->get('phdpro12');
        $pHDProgress->phdsms1=$request->get('phdsms1');
        $pHDProgress->phdsms2=$request->get('phdsms2');
        $pHDProgress->phdsms3=$request->get('phdsms3');
        $pHDProgress->phdsms4=$request->get('phdsms4');
        $pHDProgress->phdsms5=$request->get('phdsms5');
        $pHDProgress->phdsms6=$request->get('phdsms6');
        $pHDProgress->phdsms7=$request->get('phdsms7');
        $pHDProgress->phdsms8=$request->get('phdsms8');
        $pHDProgress->phdsms9=$request->get('phdsms9');
        $pHDProgress->phdsms10=$request->get('phdsms10');
        $pHDProgress->phdtne1=$request->get('phdtne1');
        $pHDProgress->phdtne2=$request->get('phdtne2');
        $pHDProgress->phdtne3=$request->get('phdtne3');
        $pHDProgress->phdtne4=$request->get('phdtne4');
        $pHDProgress->timestamps=false;

        $pHDProgress->save();

        return redirect('/student')->with('success','PhD Progress Report Data is Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PHDProgress  $pHDProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pHDProgress = PHDProgress::find($id);
        $pHDProgress->delete();
        return redirect('phdprogress');
    }
}
