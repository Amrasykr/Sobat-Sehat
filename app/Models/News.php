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
        'source',
        'created_at',
        'updated_at',
    ];
    
    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
