// En routes/web.php
Route::get('/', 'PaginaController@index');

// En app/Http/Controllers/PaginaController.php
public function index() {
    return view('mi-pagina');
}