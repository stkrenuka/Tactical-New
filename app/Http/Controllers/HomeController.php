<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Jobs\SendWelcomeEmail;


class HomeController extends Controller
{
public function index()
    {
        $user=User::find(21);
        SendWelcomeEmail::dispatch($user);
        return Inertia::render('Home', [
            'message' => $user
        ]);
    }
    // function to
}
