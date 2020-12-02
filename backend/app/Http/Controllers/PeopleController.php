<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\People;

class PeopleController extends Controller {
  public function index() {
    return People::all();
  }
  
  public function create() {

  }
}
