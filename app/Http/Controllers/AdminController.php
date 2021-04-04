<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [];

        $data['works'] = Work::all();

        return $data;
    }
}
