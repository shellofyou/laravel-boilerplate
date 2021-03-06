<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Gestione accessi',

            'permissions' => [
                'all' => 'Tutti i permessi',
                'create' => 'Crea permesso',
                'edit' => 'Modifica permesso',
                'groups' => [
                    'all' => 'Tutti i gruppi',
                    'create' => 'Crea gruppo',
                    'edit' => 'Modifica gruppo',
                    'main' => 'Gruppi',
                ],
                'main' => 'Permessi',
                'management' => 'Gestione permessi',
            ],

            'roles' => [
                'all' => 'Tutti i ruoli',
                'create' => 'Crea ruolo',
                'edit' => 'Modifica ruolo',
                'management' => 'Gestione ruoli',
                'main' => 'Ruoli',
            ],

            'users' => [
                'all' => 'Tutti gli utenti',
                'change-password' => 'Cambia password',
                'create' => 'Crea utente',
                'deactivated' => 'Utenti disattivati',
                'deleted' => 'Utenti eliminati',
                'edit' => 'Modifica utente',
                'main' => 'Utenti',
            ],
        ],

        'log-viewer' => [
            'main' => 'Log',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs',
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'Generale',
        ],
    ],

    'language-picker' => [
        'language' => 'Lingua',
        'langs' => [
            'en' => 'English (Inglese)',
            'fr-FR' => 'Français (Francese)',
            'it' => 'Italiano',
            'sv' => 'Svenska (Svedese)',
        ],
    ],
];
