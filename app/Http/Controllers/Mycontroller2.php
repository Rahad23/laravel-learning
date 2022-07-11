<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mycontroller2 extends Controller
{
    public function test()
    {
        return "<h1 style='color: red;'>My Another webpage</h1>";
    }
}
