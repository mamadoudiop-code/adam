<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aliment;

class AlimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliments = aliment::all();

        return view('aliments.index', ['aliments' => $aliments]);
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
        $aliment = aliment::updateOrCreate(['id' => $request->id], [
            'designation' => $request->designation,
            'total' => $request->total
          ]);

  return response()->json(['code'=>200, 'message'=>'aliment Created successfully','data' => $aliment], 200);
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
        $aliment = aliment::find($id);

      return response()->json($aliment);
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
        $aliment = aliment::find($id)->delete();

        return response()->json(['success'=>'Post Deleted successfully']);
        //
    }
}
