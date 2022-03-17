<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
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
        ],[
            'name.required' => 'Поле Имя обязательно для заполнения',
            'email.required' => 'Поле Email обязательно для заполнения',
            'email.unique' => 'Пользователь с таким Email уже зарегистрирован',
        ]);

        if(Session::has('refer')){
            $parent_user =  User::where('id', Session::get('refer'))->get()->first();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'refer' => uniqid('', true),
            'password' => Hash::make($request->password),
        ]);

        if($parent_user->count() > 0){
            $user->parent_id = $parent_user->id;
            $user->update();
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home'));
    }
}
