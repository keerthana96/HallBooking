<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hall extends Model
{
    protected $fillable=[
	'id',
	'name',
	'location'
	];
}
