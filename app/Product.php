<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * One product has one color
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function color(){
        return $this->belongsTo('App\Color');
    }
	
	/**
     * One product belongs to one category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
