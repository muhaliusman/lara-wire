<?php

return [
    /**
     * Jumlah folder tree yang dibolehkan
     */
    'component_tree' => 2,

    /**
     *  Root component
     */
    'root_component' => 'dashboard.index',

    /**
     * Redirect setelah login
     */
    'redirect_if_authenticated' => '/dashboard',

    /**
     * Redirect jika tidak login
     */
    'redirect_if_unauthenticated' => '/auth/login',

    /**
     * Auth component
     */
    'auth_components' => [
        'auth.login',
        'auth.forgot-password',
        'auth.reset-password'
    ],
];