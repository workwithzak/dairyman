<?php

namespace App\Http\Controllers\api\animals;

use App\User;
use App\Animals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['']]);
    }

    public function index(Request $request)
    {
        
        //dd('index animal ');
        
        $data = User::find(Auth::user()->id)->animals;
        return response()->json([
            'data' => $data
        ]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'name' => 'required',
            'category' => 'required',
            'color' => 'required',
            'age' => 'required|numeric'
        ]);
        Animals::create([
            'name' => $request->name,
            'type' => $request->category,
            'color' => $request->color,
            'age' => $request->age,
            'user_id' => Auth::user()->id
        ]);
        
        return response()->json([
            'message' => 'Animal inserted successfully'
        ]);
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function show(Animals $animals)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$animalid)
    {
        //dd($animalid);
        $animal = Animals::findOrFail($animalid);

        $input = $request->all();
        $animal->fill($input)->save();

        return response()->json([
            'data' => Animals::findOrFail($animalid)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy($animalid)
    {
        $animal = Animals::findOrFail($animalid);
        $animal->delete();

        return response()->json([
            'message' => 'Delete successfully'
        ]);
    }

}
