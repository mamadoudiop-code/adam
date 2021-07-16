<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saliment;
use App\Models\aliment;

class SAlimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $saliments = saliment::with('aliment')->get();
        $aliments= aliment::with('saliments')->get();
        
        
        return view('saliments.index',['saliments' => $saliments,'aliments'=> $aliments]);


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $saliment = saliment::updateOrCreate(['id' => $request->id], [
            'designation' => $request->designation,
            'prixTTC' => $request->prixTTC,
            'quantite' => $request->quantite,
            'aliment_id' => $request->aliment_id,
            'total' => $request->total
          ]);

  return response()->json(['code'=>200, 'message'=>'aliment Created successfully','data' => $saliment], 200);
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
        $saliment = saliment::with('aliment')->find($id);

        return response()->json($saliment);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $saliment = saliment::find($id)->delete();

        return response()->json(['success'=>'Post Deleted successfully']);
        //
    }
}
