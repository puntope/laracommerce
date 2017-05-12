<?php

namespace App\Acl;

use App\Role;

trait HasRole {

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @param mixed $role
     * @return bool
     */
    public function hasRole($role) {

        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }

    /**
     * @param $role
     * @return mixed
     */
    public function setRole($role) {

        if (! is_array($role)) {
            return $this->roles()->save(Role::where('name', $role)->first());
        }

        foreach ($role as $rol) {
            return $this->roles()->save(Role::where('name', $rol)->first());
        }

        return false;
    }

    public function isSuperAdmin() {
        return $this->hasRole('super-admin');
    }
}