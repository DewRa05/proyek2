<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GantiPwController extends Controller
{
    public function gantipw()
    {
        return view('content.auth.gantipw');
    }
}
