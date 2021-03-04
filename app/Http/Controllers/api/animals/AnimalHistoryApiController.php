<?php

namespace App\Http\Controllers\api\animals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\animalHistory;

class AnimalHistoryApiController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth:api', ['except' => ['login']]);
        
    }
}
