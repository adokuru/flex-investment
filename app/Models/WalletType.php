<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class WalletType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function updatePrice()
    {
        $this->value = $this->getPrice($this->getSymbol);
        $this->save();
    }

    public function getPrice($name)
    {
        return Cryptocap::getSingleAsset($name)->data->priceUsd;
    }
}
