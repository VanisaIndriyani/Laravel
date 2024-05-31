<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacs;
class contacsController extends Controller
{
    public function index(){
        $contacs = contacs::all();
        return view('layouts.public.contact-us', compact('contacs'));
    }
}
