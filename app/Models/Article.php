<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'category_id',
        'image',
        'content',
        'source',
    ];

    // public function categories()
    // {
    //     return $this->belongsToMany(CategoryArticle::class);
    // }

     public function categories()
    {
        return $this->belongsToMany('App\Models\CategoryArticle');
    }
}
