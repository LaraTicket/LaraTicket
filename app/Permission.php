<?php

namespace LaraTicket;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    /**
     * Role which this Permission belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
}
