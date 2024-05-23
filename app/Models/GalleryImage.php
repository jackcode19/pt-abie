<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    protected $table = 'gallery_images';

    protected $primaryKey = 'gallery_image_id';

    protected $keyType = 'string';

    protected $fillable = [
        'gallery_image_id',
        'gallery_id',
        'image'
    ];
}
