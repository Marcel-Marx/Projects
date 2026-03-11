<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    $contacts = Contact::all();
    return view('contact_book', ['contacts' => $contacts]);
});

Route::post('/add-contact', [ContactController::class, 'addContact']);
Route::post('/delete-contact/{id}', [ContactController::class, 'deleteContact']);

