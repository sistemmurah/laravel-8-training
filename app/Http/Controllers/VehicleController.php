<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        // List of data Vehicle adalah nama Model
        $vehicles = Vehicle::get();
        $test1 = 'Cubaan 1';
        $test2 = 'Cubaan 2';
        // dd = dump and die
        // dd($vehicles);
        // return view('vehicle.index'); // skrin kosong tanpa value
        return view('vehicle.index', compact('vehicles'));
        // return view('vehicle.index', compact('vehicles', 'test1', 'test2')); // kalau value banyak
    }
    public function tambah(){
        return view('vehicle.tambah'); // skrin kosong tanpa value
    }
}
