<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentator extends Model
{
    public function all_dish()
    {
        return $this->belongsToMany(Dish::class, 'user_comments');
    }
}
