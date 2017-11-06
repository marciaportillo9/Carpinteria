<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
'uses' => 'HomeController@index',
    'as' => 'home'
]);


Route::get('login',[
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);
Route::post('login','Auth\AuthController@postLogin');

Route::get('logout',[
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout'
]);
//
Route::get('register',[
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register'
]);
Route::post('register','Auth\AuthController@postRegister');
//

Route::get('pasword/email','Auth\PasswordController@getEmail');
Route::post('pasword/email','Auth\PasswordController@postEmail');
//
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');



Route::group(['middleware' => 'auth'],function (){

});

Route::resource('products', 'ProductsController', [
    'names' => 'products',
    'parameters' => [
        'productos' => 'producto'
    ]
]);

Route::resource('product-types', 'ProductTypesController', [
    'names' => 'product-type',
    'parameteres' => [
        'tipo-productos' => 'tipo-producto'
    ]
]);

Route::resource('clients', 'ClientsController', [
    'names' => 'clients',
    'parameteres' => [
        'clientes' => 'cliente'
    ]
]);
Route::resource('users', 'UsersController', [
    'names' => 'users',
    'parameteres' => [
        'usuarios' => 'usuario'
    ]
]);
Route::resource('orders', 'OrdersController', [
    'names' => 'orders',
    'parameteres' => [
        'pedidos' => 'pedido'
    ]
]);

Route::get('created-orders','CreatedOrdersController@index');
/* Route::resource('created-orders', 'CreatedOrdersController', [
     'names' => 'createdOrders',
     'parameteres' => [
         'pedidos creados' => 'pedido creado'
     ]
 ]);*/

Route::resource('purchasedMaterials-orders', 'PurchasedMaterialsOrdersController', [
    'names' => 'purchasedMaterials-orders',
    'parameteres' => [
        'Materiales comprados' => 'material comprado'
    ]
]);
Route::resource('heavyWorkDone-orders', 'HeavyWorkDoneOrdersController', [
    'names' => 'heavyWorkDone-orders',
    'parameteres' => [
        'obras gruesas realizadas' => 'obra Gruesa realizada'
    ]
]);

Route::resource('fineWorkDone-orders', 'FineWorkDoneOrdersController', [
    'names' => 'fineWorkDone-orders',
    'parameteres' => [
        'obras finas realizadas' => 'obra fina realizada'
    ]
]);

Route::resource('delivered-orders','DeliveredOrdersController', [
    'names' => 'delivered-orders',
    'parameteres' => [
        'obras entregadas' => 'obra entregada'
    ]
]);

/* Route::resource('finalized-orders', 'FinalizedOrdersController', [
     'names' => 'finalized-orders',
     'parameteres' => [
         'obrasfinalizadas' => 'obra finalizada'
     ]
 ]);*/

Route::get('created-orders','CreatedOrdersController@index');

Route::get('finalized-orders', 'FinalizedOrdersController@index');

Route::get('menu-test', 'MenuController@index');

//Route::get('createdOrders', 'CreatedOrdersController@index');





