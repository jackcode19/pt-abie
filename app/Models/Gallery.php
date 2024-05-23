<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected $primaryKey = 'gallery_id';

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'cover_image',
    ];

    public function gallery_images()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id', 'gallery_image_id');
    }


}
