<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(Request $request){

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return response([
                'status' => 402,
                'message' => 'Invalid email address'
            ]);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        

        return response([
            'status' => 200,
            'message' => 'Feedback Sent successfully',
        ]);
    }
}
