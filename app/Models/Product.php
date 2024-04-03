<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'product_name',
        'product_image',
        'description',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_id', 'id');
    }
}
