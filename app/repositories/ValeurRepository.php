<?php

namespace App\repositories;

use App\Models\Choix;
use App\Models\Entrep;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ValeurRepository
{

    protected $choix;

    public function __construct(Choix $choix)
	{
		$this->choix = $choix;
	}

	private function save(Choix $choix, Array $inputs)
	{
		$choix->lib = $inputs['libelle'];
		$lastInsertedID =Entrep::all()->last()->id;
		$choix->entreprise_id = $lastInsertedID;
     
		
			$choix->save();
	}

	public function getPaginate($n)
	{
		return $this->choix->paginate(10);
	}

	public function store(Array $inputs)
	{
		$choix = new $this->choix;		


		$this->save($choix, $inputs);
	
      
		return $choix;
	}

	public function getById($id)
	{
		return $this->choix->findOrFail($id);
	}
	public function getAll()
	{
		return User::all();
	}


	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}


	public function destroy($id)
	{
	
		$this->getById($id)->delete();

}
		
	

}