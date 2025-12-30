<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    //
    public function index(Request $request)
    {
       echo  $this->sum($request->query('num1'),$request->query('num2'));

    //   return inertia::render('Contact',['info'=>'This is the contact page.']);
    }
   public function sum($num1,$num2)
    {
        return $num1+$num2;
    }

     public static function sumTest($num1,$num2)
    {
        return $num1+$num2;
    }
}
