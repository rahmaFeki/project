<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrep extends Model
{
	protected $table = 'entrep';
    protected $fillable = ['nom','email','adr'];

	public $timestamps = false;
  
    public function missions() 
	{
		return $this->belongsToMany('App\Mission');
	}
    public function choix() 
	{
		return $this->belongsToMany('App\Choix');
	}
    public function gallery() 
	{
		return $this->belongsToMany('App\Gallery');
	}
    public function contact() 
	{
		return $this->belongsToMany('App\Contact');
	}
}
