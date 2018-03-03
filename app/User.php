<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pages()
    {
        return $this->belongsToMany('App\Page')
            ->as('subscriptions')
            ->withPivot('roles');
    }

    public function threads()
    {
        return $this->hasMany('App\Thread');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
