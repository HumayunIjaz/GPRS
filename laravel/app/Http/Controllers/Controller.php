<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\massages;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     function insert(Request $request)
    {
        
        $name = $request -> input('name');
        $email = $request -> input('email');
        $massage = $request -> input('massage');
        
        $date = date("y-m-d");

        $data = array('name'=>$name , 'email'=>$email , 'massage'=>$massage , 'reply'=>'NO' , 'created_at'=>$date  );
        DB::table('massages')->insert($data);

  
        return redirect('contact');

    }
}
