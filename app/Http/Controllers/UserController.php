<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Tamu;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function undangan()
    {
        $invitations = Invitation::where('user_id', Auth::id())->with(['theme', 'tamu'])->get();

        return view('user.undangan', compact('invitations'));
    }


    public function cs()
    {
        return view('user.cs');
    }
}
