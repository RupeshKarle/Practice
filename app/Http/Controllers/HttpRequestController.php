<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class HttpRequestController extends Controller
{
    public function getData() {
        $data = Employee::all();
        return view("httpreq", ["data" => $data]);
    }
}
