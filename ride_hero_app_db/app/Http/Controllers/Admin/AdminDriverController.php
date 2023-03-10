<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDriverController extends Controller
{
    public function getDrivers(){
        $allDriver = User::where('roles',2)->get();
        return response([
            'status' => 200,
            'allDriver' => $allDriver
        ]);
    }
}
