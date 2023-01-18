<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function teens(){
        return view("teens");
    }

    public function wedding(){
        return view("wedding");
    }

    public function children(){
        return view("children");
    }
    public function careGroup(){
        return view("careGroup");
    }
    public function foundationSchool(){
        return view("foundation");
    }

    public function viewFoundationForm(){
        return view("foundationschoolreg");
    }

    public function waterBap(){
        return view("baptism");
    }

    public function babyDedication(){
        return view("dedication");
    }
    public function about(){
        return view("about2");
    }

    public function contact(){
        return view("contact");
    }

    public function stream(){

        return view("stream");
    }
}
