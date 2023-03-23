<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('dashboard', compact('user'));
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->update();

    	return redirect('dashboard');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('dashboard');
    }
}
