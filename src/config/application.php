<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CONFIGURAÇÕES ACTIVE DIRECTORY
    |--------------------------------------------------------------------------
    |
     */
    'useLDAP' => env('USE_LDAP', true),
    'nomeGroupAdmins' => env('ADMIN_APP_LDAP'),
    'superAdmins' => env('SUPER_ADMIN_LDAP'),
];

