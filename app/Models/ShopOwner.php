<?php

// app/Models/ShopOwner.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shop_name',
        'domain',
        'package_id',
        'status',
    ];

    // Define the relationship with the Package model
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}

