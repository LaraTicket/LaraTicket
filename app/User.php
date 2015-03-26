<?php namespace LaraTicket;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use LaraTicket\Contracts\Permissions\HasPermissions as HasPermissionsContract;
use LaraTicket\Contracts\Permissions\HasRoles as HasRolesContract;
use LaraTicket\Permissions\HasPermissions;
use LaraTicket\Permissions\HasRoles;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, HasPermissionsContract, HasRolesContract {

    use Authenticatable, CanResetPassword, HasRoles, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name', 'email', 'password' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ 'password', 'remember_token' ];

    /**
     * Tickets created by this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Roles of this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
