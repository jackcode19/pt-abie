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
    ];

    public function category()
    {
        return $this->belongsTo(CategoryArticle::class, 'category_id', 'id');
    }
}
