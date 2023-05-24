<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function vidhuk()
    {
        return $this->hasMany(Commentary::class, 'dish_id', 'id');
    }
    public function all_comm()
    {
        return $this->belongsToMany(Commentator::class, 'user_comments');
    }
}