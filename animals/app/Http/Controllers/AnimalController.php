<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;


class AnimalController extends Controller
{
    public function index() {
        $animals = Animal::select('id','name','class','conservation_status','latin_name')->get();
        $animals = json_encode($animals);

        return view('animalIndex')->with('animals', $animals);
    }

    public function alphabetical() {
       $animalName = Animal::orderBy('name')->get();

        return view('alphabeticalAnimal')->with('animals', $animalName);
    }

    public function byId() {
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $id = end($link_array);
        $animalName = Animal::where('id', $id)->first();
        //find animal by id({slug})
         return view('specificAnimalInfo')->with('animals', $animalName);
     }
}
