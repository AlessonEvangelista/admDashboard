<?php
/**
 * MENU CONFIGURATION
 * ARRAY: 0, 1, 2 (PARA PERCORRER O LAÇO)
 * OPTIONS PARA A FUNCTION EXPLODE: TEXTO, LINK PARA {{ ROUTE }}, ÍCON
 */

return [
    'Application' => [
        'name' => 'AVSystem',
        'title' => 'Sistema de controle de visita - Paulispan',
        'page_login' => 'Realise o login para ter acesso a sua área administrativa'
    ],
    'menu' => [
        'guest' => [
            '0' => 'Login,login,fingerprint',
            '1' => 'Register,register,person_add'
        ]
    ]
];
