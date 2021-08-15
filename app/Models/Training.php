<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','content','image','slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
