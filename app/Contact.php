<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contact extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'contact_info';

    protected $fillable = [
        'type', 'main_text','text2','text3','title1','text_title','address','phone','email','title2','text_title2',
    ];

}
