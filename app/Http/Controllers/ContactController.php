<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Role;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use phpDocumentor\Reflection\Types\True_;

class ContactController extends Controller
{

    public function index()
    {
        return \view('pages.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all((new Contact())->getFillable()), (new ContactRequest())->rules());

        if ($validator->fails())
            return json_encode(array('state' => 'error', 'msg' => $validator->errors()));

        $contact = Contact::create($request->all());
        Mail::to(['junior.djanzou@bhent.net', 'phil.asd@jasd.fr'])->send(new ContactMail($contact));
        return json_encode(array('state' => 'success', 'msg' => 'Contact bien pris en compte.'));
    }

}
