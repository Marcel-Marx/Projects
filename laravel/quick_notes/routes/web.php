<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Note;

Route::get('/', function () {
    $notes = Note::all();
    return view('notes', ['notes' => $notes]);
});

Route::post('/add-note', function (Request $request) {
    $note = new Note();
    $note->content = $request->content;
    $note->save();

    return redirect('/');
});

Route::post('/delete-note/{id}', function ($id) {
    Note::destroy($id);

    return redirect('/');
});
