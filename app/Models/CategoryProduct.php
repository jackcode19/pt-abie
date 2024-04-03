<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_products';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    PROTECTED $fillable = [
        'id',
        'name',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
