<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.dashboard.user.index', [
            'users' => User::all()
        ]);
    }


    public function edit(User $user)
    {
        return view('public.dashboard.user.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {
        $validatedData = $request->validate([
            'is_admin' => 'required'
        ]);

        User::where('id', $user->id)
        ->update($validatedData);

        return redirect('dashboard/user')->with('success', 'Rules Has been Updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
