<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
     use HasFactory;

    protected $table = 'category_articles';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
    ];

    // public function articles()
    // {
    //     return $this->belongsToMany(Article::class);
    // }

     public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }
}
