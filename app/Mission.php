<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table = 'mission';
    protected $fillable = ['lib','image'];

	public $timestamps = false;
}
