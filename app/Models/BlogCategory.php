<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        'name',
        'summary',
        'featured',
    ];

    //region Relationships
    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
