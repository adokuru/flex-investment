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
    public function create(Request $request)
    {
        $refcode = '';
        if ($request->has('ref')) {
            session(['referrer' => $request->query('ref')]);
            $refcode = $request->query('ref');
        }
        return view('auth.register', compact('refcode'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $referrer = User::where('referral_token', session()->pull('referrer'))->first();

        if ($request->ref) {
            $referrer = User::where('referral_token', $request->ref)->first();
        }

        $length = 24;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $number = $randomString;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'referral_token' => substr($request->name, 0, 3) . substr($number, 0, 4),
            'referrer_id' => $referrer ? $referrer->id : null,
        ]);

        event(new Registered($user));

        Auth::login($user);

        $this->createWallets($user);

        // $mailData = [
        //     'name' =>  $user->name,
        //     'email' => $user->email,
        // ];
        // Mail::to($user->email)->send(new WelcomeMail($mailData));

        return redirect(RouteServiceProvider::HOME);
    }
}
