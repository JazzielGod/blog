<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) { //mutador modifica el valor antes de guardarlo
                return strtolower($value);
            },
            get: function ($value) { //accesor modifica el valor antes de mostrarlo
                return ucfirst($value);
            }
        );
    }
}
