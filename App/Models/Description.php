<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $fillable = ['contenu'];

	public $timestamps = false;
    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }
}
