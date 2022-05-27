<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('client.inscription');
    }

    /**
     * Handle an incoming registration request.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name_us' => ['required', 'string', 'max:255'],
            'email_us' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password_us' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name_us' => $request->name_us,
            'email_us' => $request->email_us,
            'userable_id' => $request->userable_id,
            'images_id' => $request->image_id,
            'userable_type' => $request->userable_type,
            'tel_us' => $request->tel_us,
            'password_us' => Hash::make($request->password_us),
        ]);




        event(new Registered($user));

        Auth::login($user); 

        return redirect(RouteServiceProvider::HOME);
    }
}
