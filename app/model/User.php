<?php namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'User';
	protected $hidden = ['firsname','lastname','email','phon','password'];

}
