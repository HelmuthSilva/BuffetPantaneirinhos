<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/about', 'PacoteController@sobre');
Route::get('/', 'PacoteController@index');
Route::get('/justificativa', 'PacoteController@justificativa');
Route::get('/verpacote/{id}', 'PacoteController@show');
Route::get('/orcamento', 'OrcamentoController@index')->middleware('auth');
Route::post('/enviar-orcamento', 'OrcamentoController@store');
Route::get('/meus-orcamentos', 'OrcamentoController@orcamentoIndividual')->middleware('auth');

Route::get('/fornecedor-historico/{id}', 'FornecedorController@historico');
Route::get('/user-fornecedor/{id}', 'FornecedorController@mostrarPeloUsuario');
Route::get('/fornecedores', 'FornecedorController@index');
Route::get('/fornecedor/{id}', 'FornecedorController@show');
Route::get('/fornecedor', 'FornecedorController@individuo');
Route::get('/fornecedor-cadastrar', 'FornecedorController@formulario');
Route::post('/fornecedor-cadastro', 'FornecedorController@store');
Route::get('/fornecedor-editar-info/{id}', 'FornecedorController@edit');
Route::post('/fornecedor-atualizar-info/{id}', 'FornecedorController@update');

Route::get('/iniciar-contrato/{id}', 'ContratosController@escolherPacote');
Route::get('/escolher-fornecedor/{id}/{ident}', 'ContratosController@escolherFornecedor');
Route::get('/final-contrato/{idf}/{idp}/{ido}', 'ContratosController@index');
Route::post('/concluir-contrato/{iden}', 'ContratosController@store');
Route::get('/gerar-pdf/{id}', 'ContratosController@pdf');

Route::get('/avaliar-fornecedor/{id}', 'FornecedorController@avaliacao');
Route::post('/finalizar-avaliacao/{id}', 'FornecedorController@avaliar');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
