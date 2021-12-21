<?php

namespace App\repositories;

use App\Models\Contact;
use App\Models\Entrep;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ContactRepository
{

    protected $contact;

    public function __construct(Contact $contact)
	{
		$this->contact = $contact;
	}

	private function save(Contact $contact, Array $inputs)
	{
		$contact->num = $inputs['num'];
		$lastInsertedID =Entrep::all()->last()->id;
		$contact->entreprise_id = $lastInsertedID;
     
		
			$contact->save();
	}

	public function getPaginate($n)
	{
		return $this->contact->paginate(10);
	}

	public function store(Array $inputs)
	{
		$contact = new $this->contact;		


		$this->save($contact, $inputs);
	
      
		return $contact;
	}

	public function getById($id)
	{
		return $this->contact->findOrFail($id);
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