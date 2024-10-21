<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopPurchase extends Model
{
    use HasFactory;

    protected $table = 'shop_purchases';

    protected $primaryKey = 'id';

    public function shopUser(): BelongsTo
    {
        return $this->belongsTo(ShopUser::class);
    }
}
