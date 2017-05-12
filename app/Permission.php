<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    protected $guarded = [];

    protected $dateFormat = 'DD-MM-YYYY';
}
