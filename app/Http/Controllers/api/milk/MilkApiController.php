<?php

namespace App\Http\Controllers\api\milk;

use App\Http\Controllers\Controller;
use App\Milk;
use App\User;
use App\Animals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MilkApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::find(Auth::user()->id)->animals;
        return [
            'animals' => $data
        ];
        //dd($data);
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate
        $this->validate($request,[
            'shift' => 'required',
            'leter' => 'required|max:8|min:1'
        ]);

        //store
        
        $animalid = $request->animalid;
        $quantity = $request->leter;

        //dd($animalid,$quantity,$request->shift);
        

        $newarr = array();
        for($i = 0;$i<count($animalid);$i++){
           $newarr2 = array();
           array_push($newarr2,Auth::user()->id,$animalid[$i]);
           array_push($newarr,$newarr2);
           
        }

        for($j=0;$j<count($newarr);$j++){
            array_push($newarr[$j],$request->shift,$quantity[$j]);
        }
        for($z = 0; $z<count($newarr);$z++){
            Milk::create([
                'user_id' => $newarr[$z][0],
                'animal_id' => $newarr[$z][1],
                'shift' => $newarr[$z][2],
                'quantity' => $newarr[$z][3],
            ]);
        }
        
        //redirect to form
        return [
            'message' => 'Data store successfully'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function show(Milk $milk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function edit(Milk $milk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Milk $milk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Milk $milk)
    {
        //
    }
}
