<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = true;
     protected $table = 'articles';
    protected $fillable = [
        'title',
        'deskripsi',
        'link',
        'FotoContent',
        'Tipe',
    ];
}
