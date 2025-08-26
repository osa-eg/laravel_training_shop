<?php

namespace App\Models;

use App\Traits\Imagable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Process;

class Category extends Model
{
    use Imagable;

    protected $fillable = [
        'name',
        'image_path'
    ];

    public $appends = [
        'image_url'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
