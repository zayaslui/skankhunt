<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Services\Services;

class ClientsResourcesController extends Controller
{
    public function obtenerPosts(){
        
        $response = Services::obtenerPosts();

        return $response;
    }
}