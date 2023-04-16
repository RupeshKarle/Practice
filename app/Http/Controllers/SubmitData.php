<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Employee;

class SubmitData extends Controller
{
    public function submitData(Request $req) {
        return Employee::all();
    }
}
