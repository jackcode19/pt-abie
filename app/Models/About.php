<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'title',
        'subtitle',
        'description_1',
        'description_2',
        'visi',
        'misi',
    ];
}
