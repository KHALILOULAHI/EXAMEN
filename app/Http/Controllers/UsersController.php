<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= users::find();
        return view('voiture.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view('users.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    

        public function store(Request $request)
        {
            $users = new users();
            $users->nom = $request->nom;
            $users->prenom = $request->prenom;
            $users->email= $request->email ;
            $users->date= $request->date;
            $users->save();
            return redirect()->route('users.index');
        }


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edite(users $users)
    {
    
            $users= users::find();
            return view('voiture.edite',compact('users'));
        }
    
    

    /**
     * Update the specified resource in storage.
     */
    

        public function update(Request $request, users $users)
        {
            $users->nom = $request->nom;
            $users->email = $request->email;
            $users->date_naissance = $request->date_naissance ;
            $users->action = $request->action;
            $users->update();
            return redirect()->route('voiture.index');
        }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
}
