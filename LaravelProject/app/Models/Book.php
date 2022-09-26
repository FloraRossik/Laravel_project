<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
      'author_id', 'title', 'description', 'genre',
      'additionaly'
    ];

    public function bookAuthor()
    {
        return $this->belongsTo(BookAuthor::class, 'author_id', 'id');
    }
}
