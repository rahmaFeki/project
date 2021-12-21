<?php

namespace App\repositories;

use App\Models\User;
use App\Type_conge;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserRepository
{

    protected $user;

    public function __construct(User $user)
	{
		$this->user = $user;
	}

	private function save(User $user, Array $inputs)
	{
		$user->nom = $inputs['nom'];
			$user->username =$inputs['username'];
     
			$user->prenom = $inputs['prenom'];
		
            $user->email =$inputs['email'];
	
            $user->password = Hash::make($inputs['password']);
			$user->save();
	}

	public function getPaginate($n)
	{
		return $this->user->paginate(10);
	}

	public function store(Array $inputs)
	{
		$user = new $this->user;		
		$user->password = bcrypt($inputs['password']);

		$this->save($user, $inputs);
	
      
		return $user;
	}

	public function getById($id)
	{
		return $this->user->findOrFail($id);
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