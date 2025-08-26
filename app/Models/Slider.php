<?php

namespace App\Models;

use App\Traits\Imagable;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use Imagable;

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
}
