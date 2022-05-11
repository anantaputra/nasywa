<?php

namespace App\Models;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [];
    
    public function cart()
    {
        return $this->hasMany(CartItem::class, 'product_id', 'id');
    }

    public function detailnya()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }
}
