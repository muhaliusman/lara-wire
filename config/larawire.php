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
    'redirect_to' => '/dashboard',

    /**
     * Auth component
     */
    'auth_components' => [
        'auth.login',
        'auth.forgot-password',
        'auth.reset-password'
    ],
];