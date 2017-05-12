<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions() {
        return $this->belongsToMany(Permission::Class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    /**
     * @param Permission $permission
     * @param array $permissions
     */
    public function setPermission(Permission $permission, array $permissions = array()) {

        if (empty($permissions)) {
            $this->permissions()->save($permission);
        } else {
            foreach ($permissions as $permission) {
                $this->permissions()->save($permission);
            }
        }
    }


    protected $guarded = [];
}
