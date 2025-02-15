<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubFinance extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'total_revenue', 'activities_fund', 'annual_party_fund', 'savings', 'school_contribution'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
