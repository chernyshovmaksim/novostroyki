<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function dashboard()
    {
        $referals = User::where('parent_id', Auth::user()->id)->get();
        $referals_count = $referals->count();
        return view('dashboard', compact('referals', 'referals_count'));
    }
}
