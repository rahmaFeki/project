<?php

namespace App\Repositories;

use App\Models\Section;
use App\Models\Entrep;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class SectionRepository
{

    protected $section;

    public function __construct(Section $section)
	{
		$this->section = $section;
	}

	private function save(Section $section, $titre,$description, $img)
	{
		$section->titre = $titre;
		$section->description = $description;
		$section->image = $img;
		$lastInsertedID =Entrep::all()->last()->id;
		$section->entreprise_id =$lastInsertedID;
     
		
			$section->save();
			return $section;
	}

	public function getPaginate($n)
	{
		return $this->section->paginate(10);
	}

	public function store($titre,$description, $img)
	{
		$section = new $this->section;		


		$this->save($section, $titre,$description, $img);
	
      
		return $section;
	}

	public function getById($id)
	{
		return $this->section->findOrFail($id);
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