<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubActivity extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'activity_name', 'activity_date', 'amount_collected'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}

