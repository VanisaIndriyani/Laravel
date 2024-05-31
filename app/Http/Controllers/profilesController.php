<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profiles;

class profilesController extends Controller
{
    public function index(){
        $profiles = profiles::all();
        return view('layouts.public.profile', compact('profiles'));
    }
}
 