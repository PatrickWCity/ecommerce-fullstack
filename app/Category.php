<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The products that belong to the categories.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
