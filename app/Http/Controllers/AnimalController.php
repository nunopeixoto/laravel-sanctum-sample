<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return response()->json([
            ['type' => 'dog', 'name' => 'thor'],
            ['type' => 'dog', 'name' => 'maggie'],
            ['type' => 'cat', 'name' => 'kika']
        ]);
    }
}
