<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mudarSenha() {
        $user = auth()->user();
        
        return view('mudarsenha', compact('user'));
    }

    public function updatePerfil(Request $request) {
        
        $user = User::where('id', auth()->user()->id)->first();

        $this->validate($request, [
            'email' => 'required|unique:users,email,'. $user->id,
            'name' => 'required',
            'password' => 'required|min:6',
        ]);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success','Sucesso!');

    }
}
