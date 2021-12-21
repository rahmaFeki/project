<?php

namespace App\Repositories;

use App\Models\Mission;
use App\Models\Entrep;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class MissionRepository
{

    protected $mission;

    public function __construct(Mission $mission)
	{
		$this->mission = $mission;
	}

	private function save(Mission $mission, $lib,$img)
	{
		$mission->lib = $lib;
		$mission->image = $img;
		$lastInsertedID =Entrep::all()->last()->id;
		$mission->entreprise_id =$lastInsertedID;
     
		
			$mission->save();
			return $mission;
	}

	public function getPaginate($n)
	{
		return $this->mission->paginate(10);
	}

	public function store($lib,$img)
	{
		$mission = new $this->mission;		


		$this->save($mission, $lib,$img);
	
      
		return $mission;
	}

	public function getById($id)
	{
		return $this->mission->findOrFail($id);
	}
	public function getAll()
	{
		return User::all();
	}


	public function update($id, $lib,$imageName)
	{
		
	$mission=$this->save($this->getById($id), $lib,$imageName);
	return $mission;
	}


	public function destroy($id)
	{
	
		$this->getById($id)->delete();

}
		
	

}