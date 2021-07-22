<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $data = Membre::all();
        $dataHomme= Membre::where("genre", "Homme")->get();
        $dataFemme= Membre::where("genre", "Femme")->get();
        $dataHomme18_24 = Membre::all()
                            ->where("genre",'=',"Homme")
                            ->whereBetween("age", [18,24]);
        $dataFemme18_24 = Membre::all()
                            ->where("genre",'=',"Femme")
                            ->whereBetween("age", [18,24]);

        $dataHommeHors = Membre::all()
                        ->where("genre", "=", "Homme")
                        ->whereNotBetween("age", [18,24]);
        return view('welcome', compact("data", "dataHomme", "dataFemme", "dataHomme18_24", "dataFemme18_24", "dataHommeHors"));
    }
}
