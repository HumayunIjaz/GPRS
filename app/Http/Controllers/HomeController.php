<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function file()
    {
        $pathToFile = 'storage/app/public/docs/BCVyFcW5lKyN5scBXpJJW1fbubhFE0Z6ToCAT6J8.pdf';
        $filename = 'app/public/docs/BCVyFcW5lKyN5scBXpJJW1fbubhFE0Z6ToCAT6J8.pdf';

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ];


        $path = storage_path($filename);

        return response()->file($pathToFile, $headers);

//        return Response::make(file_get_contents($path), 200, [
//            'Content-Type' => 'application/pdf',
//            'Content-Disposition' => 'inline; filename="'.$filename.'"'
//        ]);
    }


}
