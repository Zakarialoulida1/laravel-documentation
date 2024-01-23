<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
    public function  index(Request $request)
    {   
        $n1=15;
        $n2=12;
        $color='';
        $name='full';
        $languages = ['php', 'js', 'css', 'laravel'];     //**compact** they reduce the code tonot create keys in the teble that we want to send
        $person = [
                'name' => $request->name,
                'id' => $request->id,                  
        ];
        return view('home',compact('languages','person','name','color','n1','n2'));
    }
}
