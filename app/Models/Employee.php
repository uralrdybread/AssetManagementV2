<?php

namespace App\Models;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'email',
        'alt_email',
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
