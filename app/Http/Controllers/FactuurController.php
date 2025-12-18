<?php
// Colin Stepprath
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactuurController extends Controller
{
    public function index(){
        return view('factuur');
    }

    public function calculate(Request $request){
        $klant = $request->input('klant');
        $product = $request->input('product');
        $prijs = $request->input('prijs');
        $btw = $request->input('btw');

        $btwBedrag = $prijs * ($btw / 100);
        $totaal = $prijs + $btwBedrag;

        $request->session()->put('factuur', [
            'klant' => $klant,
            'product' => $product,
            'prijs' => $prijs,
            'btw' => $btw,
            'btwBedrag' => $btwBedrag,
            'totaal' => $totaal,

        ]);
    

    return view('factuur_resultaat', ['factuur' => $request->session()->get('factuur')]);
    }
}