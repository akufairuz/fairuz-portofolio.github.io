<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // gunakan fillable
    // fillable = field mana yang boleh disi
    // protected $fillable = [
    //     'judul', 'excerpt', 'body'
    // ];

    // Guarded : Field yang di jaga / tidak boleh di isi manual
    protected $guarded = [
        'id'
    ];
}
