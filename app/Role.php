<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions () {

        $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
