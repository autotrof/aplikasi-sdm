<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik', 'name', 'gender', 'birthdate', 'phone', 'hiredate', 'salary'
    ];

    public function department() : BelongsTo {
        return $this->belongsTo(Department::class);
    }

    public function position() : BelongsTo {
        return $this->belongsTo(Position::class);
    }

    public function attendance() : HasMany {
        return $this->hasMany(Attendance::class);
    }
}
