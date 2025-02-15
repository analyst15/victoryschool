<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['club_name', 'patron', 'registration_fee'];

    // A club has many students as members
    public function members()
    {
        return $this->belongsToMany(Student::class, 'club_memberships')
                    ->withPivot('role')
                    ->withTimestamps();
    }

    // A club has many activities
    public function activities()
    {
        return $this->hasMany(ClubActivity::class);
    }

    // A club has one finance record
    public function finance()
    {
        return $this->hasOne(ClubFinance::class);
    }
}
