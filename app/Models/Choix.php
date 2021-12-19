<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choix extends Model
{
	protected $table = 'choix';
    protected $fillable = ['lib','entreprise_id'];
    public function entrep() 
	{
		return $this->belongsTo('App\Entrep');
	}
 
}
