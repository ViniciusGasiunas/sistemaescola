
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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/{id}', 'HomeController@home');
Route::get('/contato', 'contatoController@listarcontatos');
Route::get('/aluno/cadastro','AlunoController@cadastrarAluno');
Route::post('/aluno/cadastro','AlunoController@cadastrarAluno');

Route::get('/aluno/todos', 'AlunoController@listarAlunos');

Route::get('/produto/todos','ProdutoController@listarTodos');

Route::get('/aluno/deletar/{id}','AlunoController@deletarAluno');
// como o usuario tem que digitar/acessar -- o que vai acontecer quando ele fizer isso
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
