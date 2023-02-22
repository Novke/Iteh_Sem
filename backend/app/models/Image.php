<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'bookid',
        'url',
        'path',
    ];

    // public function book()
    // {
    //     return $this->belongsTo(Book::class, 'bookid');
    // }
}
