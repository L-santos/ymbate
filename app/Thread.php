<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function page()
    {
        return $this->belongsTo('App\Page');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
