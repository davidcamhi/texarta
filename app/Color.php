<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'colors';

    /**
     * Get questions for tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {    
        return $this->belongsTo('App\Product');
    }
}
