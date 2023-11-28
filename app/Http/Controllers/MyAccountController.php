<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MyAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(User $user)
    {
        if ($posRules = $user->is_admin === 1) {
            $posRules = 'Admin';
        } else {
            $posRules = 'Users';
        }

        $dateBirthday = Carbon::parse($user->birthday)->format('d F Y');
        return view('public.dashboard.my-account.show', [
            'users' => $user,
            'rules' => $posRules,
            'birthday' => $dateBirthday
        ]);
    }

    public function edit(User $user)
    {
        return view('public.dashboard.my-account.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'alamat' => 'required|max:255',
            'birthday' => 'required',
            'profilImage' => 'file|max:3023'
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users';
        }

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        // jika ada password baru
        if ($request->passwordNew) {
            // cek apakah password baru tidak sama dengan password lama
            if (!Hash::check($request->password, $user->password)) {
                // Tambahkan pesan error jika password lama tidak cocok
                return redirect()->back()->with(['message' => 'Password lama salah.']);
            }
            // cek jika password baru tidak sama dengan confrim password
            if ($request->confirmPassword !== $request->passwordNe) {
                // Tambahkan pesan error jika password baru tidak cocok dengan konfirmasi
                return redirect()->back()->with(['message' => 'Password konfirmasi tidak sama.']);
            }

            $rules['password'] = 'required';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($request->passwordNew);

        if (!$request->password) {
            $validatedData['password'] = $user->password;
        }

        // jika ada request profileImage
        if ($request->profilImage) {
            // jika ada gambar yang lama
            if ($request->oldProfilImage) {
                Storage::delete($request->oldProfilImage);
            }

            $validatedData['profilImage'] = $request->file('profilImage')->store('image-profile');
        }

        $validatedData['id'] = auth()->user()->id;
        // update
        User::where('id', $user->id)
            ->update($validatedData);
        // jika berhasil redirect
        return redirect("/dashboard/my-account/$user->username/edit")->with('success', 'Profile Has Been Updated');
    }
}
