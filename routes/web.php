<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();
    return abort(404, 'Not Authorized');
});


$router->get('experiences', 'ExperienceController@index');
$router->get('experiences/{id}', 'ExperienceController@edit');


$router->get('education', 'EducationController@index');
$router->get('education/{id}', 'EducationController@edit');

$router->get('clients', 'ClientController@index');
$router->get('client/{id}', 'ClientController@edit');

$router->get('works', 'WorkController@index');
$router->get('works/{id}', 'WorkController@edit');

$router->get('tags', 'TagController@index');
$router->get('tags/{id}', 'TagController@edit');

$router->get('categories', 'TagController@index');
$router->get('categories/{id}', 'TagController@edit');