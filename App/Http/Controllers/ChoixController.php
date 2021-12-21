<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ChoixRepository;
use Session;
use Illuminate\Http\Request;

class ChoixController extends Controller
{
 
    protected $choixRepository;

    protected $nbrPerPage = 4;

    public function __construct(ChoixRepository $choixRepository)
    { 
	
		$this->choixRepository = $choixRepository;
	}

	public function index()
	{ 
		$choix = $this->choixRepository->getPaginate($this->nbrPerPage);
		
		$links = $choix->setPath('');

return view("gestion_choix",["choix"=>$choix,"links"=>$links])->render();
	

	}
	



	public function store(Request $request)
	{ 
	   $validator = Validator::make($request->all(), [
        'libelle' => 'required',
    ],
	[
	'libelle.required'=>'Le champ libellé est requis!',


	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
	 
		$user = $this->choixRepository->store(
	$request->all()
		);
 return response($user, 200);	
		//return redirect('user')->withOk("L'utilisateur " . $user->name . " a �t� cr��.");
		//return redirect("personnels")->with('status', '1');
	}

  


	public function update(Request $request)
	{   $validator = Validator::make($request->all(), [
        'lib' => 'required',
     
		
    ]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
		$id=$request->input('id');

		$this->choixRepository->update($id, $request->all());
		
		 return response('1', 200);
	}

	public function delete(Request $request)
	{$id=$request->input('index');
	
		$this->choixRepository->destroy($id);
		//$this->userRepository->update($id, $request->all());
return response($id, 200); 
		//return redirect()->back();
	}

}