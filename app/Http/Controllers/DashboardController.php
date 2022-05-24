<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $user = Auth::user();
        $posts = auth()->user()->posts;
        $recent = $posts->first();

        return view ('dashboard', compact('posts', 'recent', 'user'));

    }
}
