<?php

namespace App\Models;

use App\Traits\Imagable;
use Illuminate\Database\Eloquent\Model;

class Bannar extends Model
{
    use Imagable;

    protected $fillable = [
        'title',
        'sub_title',
        'url',
        'image_path'
    ];

    public $appends = [
        'image_url'
    ];

}
