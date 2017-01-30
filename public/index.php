<?php

require_once __DIR__."/../bootstrap.php";

$app->get("/clientes", function (){
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

    foreach($clientes as $key => $value){
         echo
         "
         {$key}
            <br/ >
            {
            <br/>
         &nbsp;&nbsp;   \"Nome\" :   \"{$value['Nome']}\" <br/>
         &nbsp;&nbsp;   \"CPF\":    \"{$value['CPF']}\"  <br/>
         &nbsp;&nbsp;   \"Email\":  \"{$value['email']}\" <br/>
         }
         <br /><br />
         ";
    }
});

$app->run();