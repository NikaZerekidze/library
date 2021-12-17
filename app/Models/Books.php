<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authors;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'published',
    ];
    public function authors()
    {
        return $this->belongsToMany(Authors::class ,'author_book', 'book_id', 'id');
    }
}
