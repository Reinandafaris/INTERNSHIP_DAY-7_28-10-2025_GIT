<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cast extends Model
{
    use HasFactory;

    // Tentukan tabel jika namanya beda (opsional jika sudah 'casts')
    protected $table = 'cast';

    // Tentukan kolom mana saja yang boleh diisi
    protected $fillable = ['nama', 'umur', 'bio'];
}
