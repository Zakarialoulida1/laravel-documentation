<?php

namespace App\Http\Controllers;

use App\Models\profiles;
use Illuminate\Http\Request;

class profilcontroller extends Controller
{
    public function index(){
      $profiles= profiles::paginate(10);
        return view('profiles',compact('profiles'));
    }
}
