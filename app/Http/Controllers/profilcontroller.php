<?php

namespace App\Http\Controllers;

use App\Models\profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class profilcontroller extends Controller
{
    public function index()
    {
        $profiles = profiles::paginate(9);
        return view('profil.index', compact('profiles'));
    }
    // public function show(Request $request){
    //    $id= $request->id;
    //     $profil=profiles::findorfail($id);  //find  function that fetch the profil **  findorfail function have the same feature find in addition to fail when the profil not found
    // //  if($profil === Null){
    // //    return  abort(404);  abort send to page not found
    // //  }

    //     return view('profil.detailProfil',compact('profil'));
    // }
    public function show(profiles $profil)
    {
   
        return view('profil.detailProfil', compact('profil'));
    }


    public function create()
    {
        return view('profil.create');
    }


    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password =Hash::make( $request->password);
        
        
        $bio = $request->bio;
        //valiodation
        $request->validate([
            'name' => 'required',    //  |max:20|min:3|between: 3,10  |boolean (true or false* 0 or1)|date|email|url|unique:(defines which tables it's necessary)   
            'email' => 'required|email|unique:profiles',   
            'password' => 'regex:/^(?=.*[A-Za-z])(?=.*\d).{8,}$/|required|confirmed',
            'bio' => 'min:40',

        ]);
        //insertion


        profiles::create([

            //$request->post()  there is also this method post who simplify the code using the post but it must the names in the form similar to the data base
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'bio' => $bio,
        ]);
        //redirection
        //redirect('url')
        // redirect()->route('profile', ['id' => 1]);  => For convenience and to minimise the syntax, Laravel also offers the global to_route function****to_route('profile', ['id' => 1])***
        //redirect->action
        //back()->withinput(request) return to the previous page
        return redirect()->route('profil.index')->with('success', $name . '  votre compte est bien crée ');
    }
}
