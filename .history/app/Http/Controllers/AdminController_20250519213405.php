<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        if (!$user || $user->email !== 'bart.vandijk@zerodayfanshop.nl') {
            abort(403, 'Unauthorized');
        }
        return view('admin.dashboard');
    }
}
