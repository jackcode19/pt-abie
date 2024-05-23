<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;

    protected $table = 'home_contents';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

     protected $fillable = [
        'about_us_summary',
        'about_us_vision',
        'about_us_mision',
        'about_us_value',
    ];

    public function featuredProduct()
    {
        return $this->belongsTo(Product::class, 'id');
    }

    // Relasi dengan model Service
    public function featuredService()
    {
        return $this->belongsTo(Service::class, 'id');
    }

    // Relasi dengan model Client
    public function featuredClient()
    {
        return $this->belongsTo(Client::class, 'id');
    }

    // Relasi dengan model Article
    public function featuredArticle()
    {
        return $this->belongsTo(Article::class, 'id');
    }
}
