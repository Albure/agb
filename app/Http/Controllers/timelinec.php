<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class timelinec extends Controller
{
    public function index()
    {
        return view('timeline.timelines');


    }
}
