<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogs;

use Illuminate\Support\Facades\DB;
class blogController extends Controller
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
         $blogs = blogs::all();
        return view('blogs.index', compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title       = $request -> input('title');
        $meta =   $request -> input('meta');
        $keyword = $request -> input('keyword');
        $link = $request -> input('link');
        $image = $request -> input('image');
        $date = $request -> input('date');
        $status = $request -> input('status');
        $created_at = date("y-m-d"); 
        $data = array('title' => $title , 'meta'=> $meta , 'keyword' => $keyword , 'link' => $link , 'image' => $image , 'date' => $date , 'status' => $status , 'created_at' => $created_at);
        DB::table('blogs')->insert($data);
        return redirect('blogs');
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
        $blogs = blogs::find($id);
       return view('blogs.edit' , compact('blogs')); 
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
         $title       = $request -> input('title');
        $meta =   $request -> input('meta');
        $keyword = $request -> input('keyword');
        $link = $request -> input('link');
        $image = $request -> input('image');
        $date = $request -> input('date');
        $status = $request -> input('status'); 
        $data = array('title' => $title , 'meta'=> $meta , 'keyword' => $keyword , 'link' => $link , 'image' => $image , 'date' => $date , 'status' => $status);
        blogs::find($id)->update($data);
        return redirect('blogs');  


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blogs::find($id)->delete();
        return redirect('blogs');
    }
}
