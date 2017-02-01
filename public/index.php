<?php

require_once __DIR__."/../bootstrap.php";

$app->get("/clientes", function () use($app){
        $clientes = [ 'Cliente1' =>
        [
            'Nome' => 'Denilson',
            'CPF' => '21321421215215',
            'email' => 'asdas@stste.com.br',

        ],

        'Cliente2' => [
            'Nome' => 'Emerson',
            'CPF' => '21321421215215',
            'email' => 'asdas@stste.com.br'
        ],

        'Cliente3' => [
            'Nome' => 'Erick',
            'CPF' => '21321421215215',
            'email' => 'asdas@stste.com.br'
        ],

        'Cliente4' => [
            'Nome' => 'Johnson',
            'CPF' => '21321421215215',
            'email' => 'asdas@stste.com.br'
        ]
    ];

    return $app->json($clientes);
});

$app->run();