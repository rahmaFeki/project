<?php

namespace App\repositories;
use DB;
use App\Models\Entrep;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class EntrepriseRepository
{

    protected $entreprise;

    public function __construct(Entrep $entre)
	{
		$this->entreprise = $entre;
	}






	public function getById($id)
	{  if(Entrep::all()->last()!=null){
		$lastInsertedID =Entrep::all()->last()->id;
		return $this->entreprise->findOrFail($lastInsertedID);
	}
	return null;
	}
	public function store(Array $inputs)
	{
		$entrep = new $this->entreprise;		

	$this->save($entrep, $inputs);
	return $entrep;
}


	private function save(Entrep $entrep, Array $inputs)
	{
	
		$entrep->nom = $inputs['nom'];
			$entrep->email =$inputs['email'];
     
			$entrep->contenu = $inputs['contenu'];
		
            $entrep->adr =$inputs['adr'];
	
			$entrep->save();
	}

	public function update($id, Array $inputs)
	{ 
		$this->save($this->getById($id), $inputs);
	}


		
	

}