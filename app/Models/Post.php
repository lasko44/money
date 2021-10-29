<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'sub_title',
        'body',
        'file_name',
        'slug',
        'url',
        'blog_category_id'
    ];

    //region Relationships
    /**
     * @var mixed
     */


    public function BlogCategory(){
        return $this->belongsTo(BlogCategory::class);
    }
    //endregion

    //region Model Methods
    public function excerpt(){
        return substr($this->body, 3, 40);
    }
    //endregion
}
