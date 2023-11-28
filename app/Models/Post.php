<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    // function scopeFIlter
    public function scopeFilter($query, array $filters)
    {
        // cek apakah ada request search
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filters['user'] ?? false,
            fn ($query, $user) =>
            $query->whereHas(
                'user',
                fn ($query) =>
                $query->where('username', $user)
            )
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getCommentCount()
    {
        return $this->comments()->count();
    }

    public function views()
    {
        return $this->hasMany(View::class);
    }

    // function slug
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // function slugRouteBinding
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
