<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price'];

    /**
     * The category that belong to the product.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * The Supplier that belong to the product.
     */
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    /**
     * The products that belong to the categories.
     */
    public function orderitems()
    {
        return $this->hasMany('App\OrderItem');
    }
}
