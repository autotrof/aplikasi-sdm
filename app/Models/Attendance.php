<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'time_in', 'time_out', 'description', 'status'

    ];

    public function employee() : BelongsTo {
        return $this->belongsTo(Employee::class);
    }
}
