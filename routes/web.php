<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tools', function () {

    $ninjas = [
        ['name' => "mario", "skill" => 75, "id" => "1"],
        ['name' => "bambo", "skill" => 45, "id" => "2"],
    ];
    return view('tools.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/tools/{id}', function ($id) {

    return view('tools.show', ["id" => $id]);
});