<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manager extends Model
{
    protected $fillable = [
        'categoryId',
        'regionId',
        'fio',
        'categoryId',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categoryId', 'id');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'locationId', 'id');
    }
}
