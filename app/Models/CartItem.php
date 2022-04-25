<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function usernya()
    {
        return $this->belongsTo(User::class);
    }

    public function productnya()
    {
        return $this->belongsTo(Product::class);
    }
}
