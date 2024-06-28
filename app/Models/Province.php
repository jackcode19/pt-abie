<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidForKey;

class Province extends Model
{
    use HasFactory;

    use HasFactory, UuidForKey;

    protected $table = 'provinces';

    protected $primaryKey = 'provinces_id';

    protected $keyType = 'string';

    protected $fillable = [
        'name',
    ];
}
