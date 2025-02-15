<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['admission_number', 'name', 'class'];

    // A student can join multiple clubs
    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'club_memberships')
                    ->withPivot('role')
                    ->withTimestamps();
    }
}
