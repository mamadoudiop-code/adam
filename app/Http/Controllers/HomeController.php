<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\saliment;
use App\Models\aliment;
use DB;

class HomeController extends Controller
{
    public function index(Request $request){
       //echo "<button id=emptycart></button>";
        $aliments = aliment::with('saliments')->get();
       
        $id_aliment = [];
        foreach($aliments as $ali){
            array_push($id_aliment,$ali->id);
           
        }
       
            $saliments_belongs_to_pain = saliment::with('aliment')->where('aliment_id',$id_aliment[0])->get();
            $saliments_belongs_to_patiss = saliment::with('aliment')->where('aliment_id',$id_aliment[1])->get();
       
       
        return view('adam.index',compact('aliments','id_aliment','saliments_belongs_to_pain','saliments_belongs_to_patiss'));

    }
    public function testcart(){
        return view('adam.cart');
    }
    public function validPaiement(Request $request){
        
        $numF = DB::table('factures')->latest('updated_at')->first();
        $fact_generate = 'FAC-'.str_pad($numF->id + 1, 4, "0", STR_PAD_LEFT);
        
        Facture::create(
            [
                'NumF' =>  $fact_generate,
                 'rendu' => $request->input('rendre'),
                 'libelleproduct' => $request->input('libproduct'),
                'quantite' => $request->input('quantite'),
                 'MontantDonné' => $request->input('num1'),
                
            ]);
       
            echo "<script>if(sessionStorage.getItem('cart')){
                sessionStorage.removeItem('cart');
                updateCartTotal();
              
            }</script>";
        return response()->view('adam.showvalidation') 
        ->header("Refresh", "5;url=/adam"); 
    }
    //
}
