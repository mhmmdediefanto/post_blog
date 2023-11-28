<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user() //satu comment hanya dimiliki satu users
    {
        return $this->belongsTo(User::class);
    }

    public function post() //satu comment hanya boleh dimiliki satu postingan
    {
        return $this->belongsTo(Post::class);
    }
}
