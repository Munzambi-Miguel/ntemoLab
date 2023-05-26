<?php

namespace App\Models\Traits\Perfis;

use Adldap\Laravel\Facades\Adldap;
use App\Models\External\AD\AD;

/**
 * Trait ApplicationUser
 * @package App\Models\Traits\Perfis
 *
 * Este contrato deve ser incluído em todas as aplicações (no modelo User).
 */
trait ApplicationUser
{

    /**
     * Verifica se o utilizador é Administrador da aplicação.
     * @return bool
     */
    protected function scopeIsAdmin(): bool
    {

        if (config('application.utilizaldap')) {
            AD::init();
            if (AD::membroDe($this->name, config('application.nomeGrupoAdmins'))) {
                return true;
            }

            return false;
        }
        return false;

    }

    /**
     * Verifica se o tuilizador é Super Admin
     * Esta lista é definida no ficheiro .env (SUPER_ADMINS = 'jose.ferreira@kinsari.com,miguel.araujo@kinsari.com')
     * Deve ser utilizado apenas por responsáveis da Kinsari pois dá acesso ao IMPERSONATE
     * @return bool
     */
    protected function scopeIsSuperAdmin(): bool
    {
        $superAdmins = explode(',', config('application.superAdmins'));
        if (in_array($this->email, $superAdmins, true)) {
            return true;
        }

        return false;
    }
}
