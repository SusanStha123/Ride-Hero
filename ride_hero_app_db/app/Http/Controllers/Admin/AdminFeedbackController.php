<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function getFeedbacks(){
        $allFeedback = Contact::all();
        return response([
            'status' => 200,
            'allFeedback' => $allFeedback
        ]);
    }
}
