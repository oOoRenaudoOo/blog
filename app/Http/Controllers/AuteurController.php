<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    public function index(User $user) {

    
        return view('auteur',compact('user'));
    
   }
}
