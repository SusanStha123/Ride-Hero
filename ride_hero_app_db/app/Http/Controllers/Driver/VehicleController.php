<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function addVehicle(Request $request){
        $vehicle = new Vehicle();
        $image = $request->file('image');
        $new_image = time().$image->getClientOriginalName();
        $image->move('driver/vehicle-img/',$new_image);
        $vehicle->image = '/driver/vehicle-img/'.$new_image;
        $vehicle->name = $request->name;
        $vehicle->brand = $request->brand;
        $vehicle->category = $request->category;
        $vehicle->description = $request->description;
        $vehicle->save();
        
        return response([
            'status' => 200,
            'message' => 'Vehicle added successfully',
        ]);

    }

    public function getVehicles(){
        $allVehicle = Vehicle::all();
        return response([
            'status' => 200,
            'allVehicle' => $allVehicle
        ]);
    }
}
