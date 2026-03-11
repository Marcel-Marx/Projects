<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function addContact(Request $req){
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->phonenumber = $req->phonenumber;
        $contact->save();
        return redirect('/');
    }

    public function deleteContact($id){
        Contact::destroy($id);
        return redirect('/');
    }
}
