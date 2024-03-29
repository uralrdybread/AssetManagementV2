<?php

namespace App\Models;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
