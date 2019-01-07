<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormMakerController extends Controller
{
    public function interface_init() {
      return view("form_maker");
    }
}
