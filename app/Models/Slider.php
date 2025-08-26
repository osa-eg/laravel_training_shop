<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'url',
        'button_name',
        'sort',
        'image_path'
    ];

    public $appends = [
        'image_url'
    ];


    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->image_path && Storage::exists($this->image_path) ? Storage::url($this->image_path) : null
        );
    }
}
