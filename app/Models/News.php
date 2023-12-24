<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = [
        'title',
        'category',
        'image',
        'description',
        'author_id',
        'created_at',
        'updated_at',
    ];
    
    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
