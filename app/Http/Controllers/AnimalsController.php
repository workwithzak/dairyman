<?php

namespace App\Http\Controllers;

use App\User;
use App\Animals;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class AnimalsController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //dd($data);
        if ($request->ajax()) {
            $data = User::find(Auth::user()->id)->animals;
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="/showhistory/'. $row->id .'"><i class="fa fa-eye" aria-hidden="true"></i></a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        //return view('users');
        return view('animals.showall');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.addanimal');
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
        
        return redirect()->route('showallanimals');

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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function edit(Animals $animals)
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
    public function update(Request $request, Animals $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animals $animals)
    {
        //
    }

}
