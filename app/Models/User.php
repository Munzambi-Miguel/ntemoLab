<?php

namespace App\Models;

use Adldap\Laravel\Traits\HasLdapUser;
use App\Models\Traits\Perfis\ApplicationUser;
use App\Models\Traits\Perfis\AssembleiaUser;
use App\Models\Traits\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Spatie\Permission\Traits\HasRoles;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;
    use HasLdapUser;
    use Search;
    use Impersonate;
    use ApplicationUser, AssembleiaUser;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $searchable = [
        'name',
        'email',
    ];

    public function canImpersonate()
    {
        return $this->isSuperAdmin();
    }

    public function updateUtilizador($validatedData)
    {
        $this->update($validatedData);
        $this->roles()->detach();
        $this->assignRole($validatedData['perfil']);

    }




}
