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
            'role' =>"required",
            'password' => "required|min:5|max:30",
        ]);
        
    
        if (Auth::attempt($loge)) {
            
                $request->session()->regenerate();
                return redirect()->route('product');
        }
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
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
        $item=$request->validate([
            'linpdt' =>"required|min:5|max:40",
            'prix' =>"required",
            'qte' =>"required",
            'description'=>"required|min:5|max:70",
            'type' =>"required",
            'image'=>"required|image|mimes:jpeg,png,jpg,gif,",
        ]);
        $item['image']=$request->file('image')->store('images','public');
       
        Produit::create($item);
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $donne=Produit::find($id);
        return view('show',compact('donne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function delete( $id)
    {
        $donner=Produit::find($id);
        $donner->delete();
        return redirect()->route('product');
    }
}
