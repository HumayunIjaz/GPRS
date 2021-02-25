<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paintings;
use Illuminate\Support\Facades\DB;
class paintingController extends Controller
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
        $paintings = paintings::all();
        return view('paintings.index', compact('paintings'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paintings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name       = $request -> input('name');
        $discription = "This is test";
        $collection = $request -> input('collection');
        $date = date("y-m-d");
        $data = array('name' => $name , 'discription'=> $discription , 'collection' => $collection , 'created_at' => $date );
        DB::table('paintings')->insert($data);
        return redirect('paintings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $paintings = paintings::find($id);
       return view('paintings.edit' , compact('paintings')); 

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
        $name        = $request -> input('name');
        $discription = "This is test";
        $collection  = $request -> input('collection');
        $data = array('name' => $name , 'discription' => $discription , 'collection' => $collection);
        paintings::find($id)->update($data);
        return redirect('paintings');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        paintings::find($id)->delete();
        return redirect('paintings');
    }
}
