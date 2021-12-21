<?php

namespace App\repositories;

use App\Models\Gallery;
use App\Models\Entrep;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class GalleryRepository
{

    protected $gallery;

    public function __construct(Gallery $gallery)
	{
		$this->gallery = $gallery;
	}

	private function save(Gallery $gallery, $nom)
	{
		
		$gallery->nom = $nom;
		$lastInsertedID =Entrep::all()->last()->id;
		$gallery->entreprise_id =$lastInsertedID;
     
		
			$gallery->save();
			return $gallery;
	}

	public function getPaginate($n)
	{
		return $this->gallery->paginate(6);
	}

	public function store($img)
	{
		$gallery= new $this->gallery;		


		$this->save($gallery,$img);
	
      
		return $gallery;
	}

	public function getById($id)
	{
		return $this->gallery->findOrFail($id);
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