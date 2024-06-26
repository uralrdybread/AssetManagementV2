<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\AssetStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
    'company',
    'model',
    'serial',
    'history_log',
    'assignment_date',
    'employee_id',
    ];

    public function status()
    {
        return $this->belongsTo(AssetStatus::class, 'status_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
