<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //return la liste des etudiants
    public function index(){
        return view('etudiant ');
}}
