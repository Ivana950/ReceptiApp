<?php


namespace App\Http\Controllers;
use App\Models\Recept;


class ReceptController extends Controller
{

    public function dohvatiRecepte()
    {
        $recepti = Recept::all();

        return response()->json([
            'recepti' => $recepti
        ]);
    }

   

 
}
