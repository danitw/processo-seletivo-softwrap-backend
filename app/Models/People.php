<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model {

	protected $table = 'peoples';
	protected $fillable = ['name', 'age', 'civil_state', 'CPF', 'city', 'state'];

}
