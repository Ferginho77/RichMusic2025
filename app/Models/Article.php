<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $table = 'articles';
    protected $fillable = [
        'title',
        'deskripsi',
        'link',
        'FotoContent',
        'Tipe',
        'created_at',
        'updated_at',
    ];
}
