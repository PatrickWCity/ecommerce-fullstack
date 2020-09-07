<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The category that belong to the product.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    /**
     * The category that belong to the product.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
