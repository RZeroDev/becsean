<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(PasswordUpdateRequest $request): RedirectResponse
    {
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return redirect()->back()->with('danger', 'Le mot de passe actuel est incorrect.');
        }

        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        Auth::logout();
        return redirect()->route('login');
    }
}
