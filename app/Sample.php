<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'samples';

     /**
     * One product has one color
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product(){
        return $this->belongsTo('App\Product');
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
