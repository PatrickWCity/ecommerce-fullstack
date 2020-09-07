<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
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
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    /**
     * The products that belong to the categories.
     */
    public function orderitems()
    {
        return $this->hasMany('App\OrderItem');
    }
}
