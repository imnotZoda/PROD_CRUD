<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['prod_name', 'prod_desc', 'type', 'price', 'img'];

    /**
     * Get the images for the product.
     */
    public function images()
    {
        return explode(',', $this->img);
    }
    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function orderList()
    {
        return $this->belongsToMany(OrderList::class);
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'product_suppliers', 'product_id', 'supplier_id')
                    ->withPivot('date_supplied', 'prod_price');
    }
}
