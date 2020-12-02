<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\People;

class PeopleController extends Controller {
  public function index() {
    return People::all();
  }
  
  public function create(Request $request) {
    $people = new People;
    $content = $request->all();

    $people->name  = $content['name'];
    $people->age   = $content['age'];
    $people->civil_state = $content['civil_state'];
    $people->CPF   = $content['CPF'];
    $people->city  = $content['city'];
    $people->state = $content['state'];

    $people->save();
  }

  public function edit($id, Request $request) {

  }
  
  public function delete($id) {

  }
}
