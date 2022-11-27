<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel;
class TravelController extends Controller
{
    public function index(){
        $info=travel::first();
        return json_decode($info);
    }
}
