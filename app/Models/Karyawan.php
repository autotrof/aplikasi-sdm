<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = [];

    function kehadiran() {
        return $this->hasMany(Kehadiran::class);
    }

    function izin() {
        return $this->hasMany(IzinKaryawan::class);
    }

    function groups() {
        return $this->belongsToMany(Group::class);
    }
}

