<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use function PHPSTORM_META\type;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['']]);
    }
    public function index()
    {

        $user = Auth::user();
        $cows = count(DB::table('animals')
                    ->where('type', 'cow')
                    ->get());

        $buffelo = count(DB::table('animals')
                    ->where('type', 'buffelo')
                    ->get());

        
        return response()->json(['user' => $user,'cowno' => $cows,'bufno' => $buffelo]);
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
