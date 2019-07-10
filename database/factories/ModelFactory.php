<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Analistum::class, function (Faker\Generator $faker) {
    return [
        'IdAnalista' => $faker->randomFloat,
        'MatriculaAnalista' => $faker->sentence,
        'NomeAnalista' => $faker->sentence,
        'SenhaAnalista' => $faker->sentence,
        'remember_token' => null,
        'guard' => $faker->sentence,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Analistum::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Tipo::class, function (Faker\Generator $faker) {
    return [
        'IdTipo' => $faker->randomFloat,
        'NomeTipo' => $faker->sentence,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Fabricante::class, function (Faker\Generator $faker) {
    return [
        'IdFabricante' => $faker->randomFloat,
        'NomeFabricante' => $faker->sentence,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Modelo::class, function (Faker\Generator $faker) {
    return [
        'IdModelo' => $faker->randomFloat,
        'IdFabricante' => $faker->randomFloat,
        'IdTipo' => $faker->randomFloat,
        'NomeModelo' => $faker->sentence,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Computador::class, function (Faker\Generator $faker) {
    return [
        'IdComp' => $faker->randomFloat,
        'IdModelo' => $faker->randomFloat,
        'IdAnalista' => $faker->randomFloat,
        'SerialComp' => $faker->sentence,
        'HostnameComp' => $faker->sentence,
        'StatusComp' => $faker->sentence,
        'ObservacaoComp' => $faker->sentence,
        'LacreComp' => $faker->sentence,
        'DataCadastroComp' => $faker->dateTime,
        
        
    ];
});

