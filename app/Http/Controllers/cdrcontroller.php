<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class cdrcontroller extends Controller
{


  public function show()
  {

    return view('cdr.kkkr3w');

  }

  public function PostContact(Request $request)
  {
    dd($request->all());

  }


    //
}
