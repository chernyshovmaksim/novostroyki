<?php

namespace App\Http\Controllers;

use App\Models\User;


class ReferController extends Controller
{
    public function index($refer)
    {
        $user = User::where('refer', $refer)->get()->first();
        if($user->count() > 0){
            session(['refer' => $user->id]);
        }
        return redirect(route('home'));
    }
}
