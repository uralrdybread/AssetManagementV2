<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asset;

class AssetStatus extends Model
{
    use HasFactory;

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
