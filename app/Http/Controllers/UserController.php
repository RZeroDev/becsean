<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Mail\NotificationForAdmin;
use App\Mail\Registered;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->roles->first()->name == 'admin' || Auth::user()->roles->first()->name == 'dev') {
            $roles = Role::where('name', '!=', 'super-admin')->get();
        } else {
            $roles = Role::all();
        }

        return view('dashboard.pages.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $imageHelper = new ImageHelper();
        $imagePath = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->image, 'images/users/');
        }
        $password = Str::random(8);

        $user = User::create([
            'firstname' => $request->nom,
            'lastname' => $request->prenom,
            'avatar' => $imagePath,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($password),
            'status' => true,
        ]);
        $user->assignRole($request->role);
        Mail::to($request->email)->send(new Registered($password, $user));

        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Un utilisateur a été ajoutée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('users.index');
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
    public function edit($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        $roles = Role::all();
        return view('dashboard.pages.users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, $email)
    {
        $user = User::where('email', $email)->firstOrFail();

        $imagePath = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->image, 'images/users/');
        }
        // dd($imagePath);
        $user->update([
            'firstname' => $request->nom,
            'lastname' => $request->prenom,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $imagePath ? $imagePath : $user->avatar,
        ]);
        // dd($user);
        $user->assignRole($request->role);

        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Un utilisateur a été modifié";

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        // dd($user);
        if ($user->status == true) {
            $user->update(['status' => false]);
        } else {
            $user->update(['status' => true]);
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('users.index');
    }
}
