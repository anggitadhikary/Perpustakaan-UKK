<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::latest()->paginate(5);
        // dd($buku);
        return view('user.index', compact('user'));
    }
    
}
