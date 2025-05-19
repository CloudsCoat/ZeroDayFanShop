<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $isAdmin = $user && $user->email === 'bart.vandijk@zerodayfanshop.nl';
        return view('admin.dashboard', compact('isAdmin', 'user'));
    }
}
