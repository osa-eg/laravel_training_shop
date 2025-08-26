<?php

namespace App\Models;

use App\Traits\Imagable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use Imagable;

    protected $fillable = [
        'name',
        'category_id',
        'image_path',
        'price_before_discount',
        'price_after_discount',
        'details',
        'specification',
    ];

    public $appends = [
        'image_url'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
