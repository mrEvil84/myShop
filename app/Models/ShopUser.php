<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ShopUser extends Model
{
    use HasFactory;

    protected $table = 'shop_users';

    protected $primaryKey = 'id';

    public function purchases(): HasMany
    {
        return $this->hasMany(ShopPurchase::class);
    }

    public function latestPurchase(): HasOne
    {
        return $this->hasOne(ShopPurchase::class)->latest('purchase_date');
    }

    public function getLastPurchaseDate()
    {
        $lastPurchases = $this->latestPurchase()->get('purchase_date');
        $lastPurchaseDate = null;
        if ($lastPurchases->count() > 0) {
            $lastPurchaseDate = $lastPurchases->first()->purchase_date;
        }

        return $lastPurchaseDate;
    }
}
