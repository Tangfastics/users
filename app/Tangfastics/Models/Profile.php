<?php

namespace Tangfastics\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $softDelete = true;

    public function user()
    {
        return $this->belongsTo('Tangfastics\Models\User');
    }
}
