<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacs extends Model
{
    use HasFactory;
    public function index()
    {
    return contacs::all();
    }
}
