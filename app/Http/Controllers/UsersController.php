<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function destroy()
    {
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }


    public function update(Request $request, User $user) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
        ]);

        // Update the user's information
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        if ($request->has('password')) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->save();

        return redirect('/dashboard')->with('message', 'User updated successfully');
    }
}
