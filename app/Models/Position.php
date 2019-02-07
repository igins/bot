<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
