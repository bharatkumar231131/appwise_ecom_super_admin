<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageBuy extends Model
{
    public $table = 'package_buy';
    protected $guarded = [];

    public function shop()
    {
        return $this->belongsTo(ShopOwner::class);
    }
}
