<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GestionController extends Controller
{

    public function loginform()
    {
        return view('login');
    }
    public function loginstore(Request $request)
    {
      
    
        $loge=$request->validate([
            'login' =>"required|min:5|max:30",
            'type' =>"required",
            'password' => "required|min:5|max:30",
        ]);
        
        
        if (Auth::attempt($loge)) {
             return redirect()->route('welcome');
         }
         
    }



    /**
     * Display a listing of the resource.
     */
    public function product()
    {
        $donner=Produit::all();
        return view('product',compact('donner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
