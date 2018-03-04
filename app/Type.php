<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    const PUBLIC = 1;
    const RESTRICTED = 2;
    const PRIVATE = 3;
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function pages()
    {
        return $this->hasMany('App/Page');
    }
}
