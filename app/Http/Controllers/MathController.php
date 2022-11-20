<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function input(){
        return view('input');
    }
    //
    public function output(Request $request){
        $bil1=$request->get('bil1');
        $bil2=$request->get('bil2');
        $jumlah = $bil1 + $bil2;
        $kurang= $bil1 - $bil2;
        $kali = $bil1 * $bil2;
        $bagi = $bil1 / $bil2;
        return view('output',[
            'jumlah' => $jumlah,
            'kurang' => $kurang,
            'kali' => $kali,
            'bagi' => $bagi,
        ]);
    }
}
