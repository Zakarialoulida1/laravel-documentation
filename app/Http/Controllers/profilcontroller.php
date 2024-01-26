<?php

namespace App\Http\Controllers;

use App\Models\profiles;
use Illuminate\Http\Request;


class profilcontroller extends Controller
{
    public function index(){
      $profiles= profiles::paginate(10);
        return view('profil.index',compact('profiles'));
    }
    public function show(Request $request){
       $id= $request->id;
        $profil=profiles::findorfail($id);  //find  function that fetch the profil **  findorfail function have the same feature find in addition to fail when the profil not found
    //  if($profil === Null){
    //    return  abort(404);  abort send to page not found
    //  }
        return view('profil.detailProfil',compact('profil'));
    }
}
