<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    const PUBLIC = 'public';
    const RESTRICTED = 'restricted';
    const PRIVATE = 'private';

    public $keyTipe = 'string';
    public $incrementing = false;


    public $fillable = ['title', 'description', 'type'];

    public function threads()
    {
        return $this->hasMany('App\Thread');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
            ->as('subscriptions')
            ->withPivot('roles');
    }

}
