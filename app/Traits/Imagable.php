<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

trait Imagable
{
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->image_path && Storage::exists($this->image_path) ? Storage::url($this->image_path) : null
        );
    }
}
