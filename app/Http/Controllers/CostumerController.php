<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index() {
        echo "Hallo orang baik";
    }
    public function showaddres($address) {
        echo "Alamat di " . $address;
    }
    public function getstudent($name, $code){
        echo "nama saya " . $name , " NRP: " .$code;
    }
}
