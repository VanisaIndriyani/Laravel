<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Jika nama tabel di database bukan 'categories', tambahkan properti ini
    // protected $table = 'nama_tabel_kategori';

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['name', 'description', 'image_url'];
}
