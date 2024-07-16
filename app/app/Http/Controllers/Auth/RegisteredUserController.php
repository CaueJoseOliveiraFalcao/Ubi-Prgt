<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cnpj' => ['required', 'string','size:14' , 'unique:users,cnpj'],
            'telefone' => ['required', 'size:10' , 'unique:users,telefone'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cnpj' => $request->cnpj,
            'telefone' => $request->telefone,
            'password' => Hash::make($request->password),
        ]);

        //$user->givePermissionTo('admin');
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
