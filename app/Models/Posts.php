<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // belongsTo User

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    protected $fillable = ['title', 'description'];
}
