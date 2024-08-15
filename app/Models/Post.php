<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'category',
    //     'content',
    // ];

    protected $guarded = [
        'is_active',
    ];

    // protected $casts = [ //forma de castear los datos antigua
    //     'published_at' => 'datetime',
    //     'is_active' => 'boolean',
    // ];

    protected function casts (): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }
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

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
