<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    public function dish_name()
    {
        return $this->belongsTo(Dish::class, 'dish_id', 'id');
    }
}