<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class dummyAPI extends Controller
{
    function getData()
    {
        return ["name" => "Sunnat", "email" => "latifkanadav@gmail.com", "address" => "Taraqqiyot-3 25-uy"];
    }
}
