<?php

return [
    'analistum' => [
        'title' => 'Analista',

        'actions' => [
            'index' => 'Analista',
            'create' => 'New Analistum',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'IdAnalista' => "IdAnalista",
            'MatriculaAnalista' => "MatriculaAnalista",
            'NomeAnalista' => "NomeAnalista",
            'SenhaAnalista' => "SenhaAnalista",
            'guard' => "Guard",
            
        ],
    ],

    'analistum' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => "ID",
            'name' => "Name",
            'email' => "Email",
            'email_verified_at' => "Email verified at",
            'password' => "Password",
            'password_repeat' => "Password Confirmation",
                
        ],
    ],

    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => "ID",
            'first_name' => "First name",
            'last_name' => "Last name",
            'email' => "Email",
            'password' => "Password",
            'password_repeat' => "Password Confirmation",
            'activated' => "Activated",
            'forbidden' => "Forbidden",
            'language' => "Language",
                
            //Belongs to many relations
            'roles' => "Roles",
                
        ],
    ],

    'tipo' => [
        'title' => 'Tipo',

        'actions' => [
            'index' => 'Tipo',
            'create' => 'New Tipo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'IdTipo' => "IdTipo",
            'NomeTipo' => "NomeTipo",
            
        ],
    ],

    'analistum' => [
        'title' => 'Analista',

        'actions' => [
            'index' => 'Analista',
            'create' => 'New Analistum',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'IdAnalista' => "IdAnalista",
            'MatriculaAnalista' => "MatriculaAnalista",
            'NomeAnalista' => "NomeAnalista",
            'SenhaAnalista' => "SenhaAnalista",
            'guard' => "Guard",
            
        ],
    ],

    'fabricante' => [
        'title' => 'Fabricante',

        'actions' => [
            'index' => 'Fabricante',
            'create' => 'New Fabricante',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'IdFabricante' => "IdFabricante",
            'NomeFabricante' => "NomeFabricante",
            
        ],
    ],

    'modelo' => [
        'title' => 'Modelo',

        'actions' => [
            'index' => 'Modelo',
            'create' => 'New Modelo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'IdModelo' => "IdModelo",
            'IdFabricante' => "IdFabricante",
            'IdTipo' => "IdTipo",
            'NomeModelo' => "NomeModelo",
            
        ],
    ],

    'computador' => [
        'title' => 'Computador',

        'actions' => [
            'index' => 'Computador',
            'create' => 'New Computador',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'IdComp' => "IdComp",
            'IdModelo' => "IdModelo",
            'IdAnalista' => "IdAnalista",
            'SerialComp' => "SerialComp",
            'HostnameComp' => "HostnameComp",
            'StatusComp' => "StatusComp",
            'ObservacaoComp' => "ObservacaoComp",
            'LacreComp' => "LacreComp",
            'DataCadastroComp' => "DataCadastroComp",
            
        ],
    ],

    'tipo' => [
        'title' => 'Tipo',

        'actions' => [
            'index' => 'Tipo',
            'create' => 'New Tipo',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'IdTipo' => "IdTipo",
            'NomeTipo' => "NomeTipo",
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];