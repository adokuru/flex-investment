<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentPlan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userInvestments()
    {
        return $this->hasMany(UserInvestment::class);
    }

    public function investmentType()
    {
        return $this->belongsTo(InvestmentType::class);
    }
}
