<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Role;
use Illuminate\Http\Request;
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

        Contact::create($request->all());
        return json_encode(array('state' => 'success', 'msg' => 'Contact bien pris en compte.'));
    }

}
