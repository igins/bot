<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function positions()
    {
        return $this->HasMany(Position::class);
    }
}
