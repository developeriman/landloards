<?php

namespace App\Http\Controllers\Auth;

use auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /*public function __construct(){
        $this->middleware(['guest']);
    }*/
    
    public function index(){
        auth()->logout();
        return redirect()->route('login');
    }
}