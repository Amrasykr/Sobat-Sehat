<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $table = 'activities';
    protected $fillable = [
        'name',
        'description',
        'image',
        'created_at',
        'updated_at',
        'user_id',
        'category',
        'location',
        'location_link',
        'activity_date',
        'author_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
