<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
