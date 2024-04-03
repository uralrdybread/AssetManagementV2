<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maintenance extends Model
{
    use HasFactory;

     protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'serial_number',
        'description',
    ];

    //     public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
