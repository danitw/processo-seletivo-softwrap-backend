<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Log;
use App\Models\People;

class PeopleController extends Controller {
  public function index() {
    return People::all();
  }

  public function show($id) {
    return $people = People::where('id', $id)->get();
  }

  public function create(Request $request) {
    $people = new People;
    $content = $request->all();
    // dd($content);
    // var_dump($content);
    // Log::debug('An informational message.');
    $people->name  = $content['name'];
    $people->age   = $content['age'];
    $people->civil_state = $content['civil_state'];
    $people->CPF   = $content['CPF'];
    $people->city  = $content['city'];
    $people->state = $content['state'];

    return $people->save();

    //return response()->json(['sucess' => true]);
  }

  public function edit($id, Request $request) {
    $content = $request->all();

    $people = People::find($id);

    $people->name  = $content['name'];
    $people->age   = $content['age'];
    $people->civil_state = $content['civil_state'];
    $people->CPF   = $content['CPF'];
    $people->city  = $content['city'];
    $people->state = $content['state'];

    return $people->save();
  }
  
  public function delete($id) {
    $people = People::find($id);

    $people->delete();
  }
}
