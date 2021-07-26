<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $dataContact=Contact::all();
        return view('pages.contact',compact('dataContact'));
    }

}
