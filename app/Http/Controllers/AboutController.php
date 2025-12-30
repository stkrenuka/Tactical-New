<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    //
    public function index()
    {
        return inertia ::render('About',[
            'info' => 'This is the about page.'
        ]);
    }
}
