<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;


class AnimalController extends Controller
{
    public function index() {
        $animals = json_encode(Animal::select('id','name','class','conservation_status','latin_name')->get());
        return view('animalIndex')->with('animals', $animals);
    }

    public function alphabetical() {
       $animalName = Animal::orderBy('name')->get();
        return view('alphabeticalAnimal')->with('animals', $animalName);
    }

    public function byId() {
        $id= explode('/',$_SERVER['PHP_SELF']);
        $animalName = Animal::where('id', end($id))->first();
         return view('specificAnimalInfo')->with('animals', $animalName);
     }
}
