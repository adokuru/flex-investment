<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referrer_id',
        'role_id',
        'profile_image',
        'referral_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function userInvestments()
    {
        return $this->hasMany(UserInvestment::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function wallet()
    {
        return $this->hasMany(Wallet::class)->with('walletType');
    }

    public function getBalanceAttribute()
    {
        $balance = $this->earnings;
        return $balance;
    }

    public function bitconwallet()
    {
        return $this->wallet()->where('wallet_type_id', 1)->first();
    }

    public function ethwallet()
    {
        return $this->wallet()->where('wallet_type_id', 2)->first();
    }

    public function btccashwallet()
    {
        return $this->wallet()->where('wallet_type_id', 3)->first();
    }

    public function usdtwallet()
    {
        return $this->wallet()->where('wallet_type_id', 4)->first();
    }

    /**
     * A user has a referrer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }
    /**
     * A user has many referrals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->referral_token]);
    }
}