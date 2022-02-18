<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ContactRepository;
use Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 
    protected $contactRepository;

    protected $nbrPerPage = 4;

    public function __construct(ContactRepository $contactRepository)
    { 
		$this->middleware('auth');
		$this->contactRepository = $contactRepository;
	}

	public function index()
	{ 
		$contact = $this->contactRepository->getPaginate($this->nbrPerPage);
		
		$links = $contact->setPath('');

return view("gestion_contact",["contacts"=>$contact,"links"=>$links])->render();
	

	}
	



	public function store(Request $request)
	{ 
	   $validator = Validator::make($request->all(), [
        'num' => 'required|regex:/[0-9]{8}/',
      
	
    ],
	[
	'num.required'=>'Le champ numèro de telephone est requis!',
    'num.regex'=>'Le champ numèro de telephone est invalide!',

	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
	 
		$contact = $this->contactRepository->store(
	$request->all()
		);
 return response($contact, 200);	
		//return redirect('user')->withOk("L'utilisateur " . $user->name . " a �t� cr��.");
		//return redirect("personnels")->with('status', '1');
	}

  


	public function update(Request $request)
	{  $validator = Validator::make($request->all(), [
        'num' => 'required|regex:/[0-9]{8}/',
      
	
    ],
	[
	'num.required'=>'Le champ numèro de telephone est requis!',
    'num.regex'=>'Le champ numèro de telephone est invalide!',

	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
		$id=$request->input('id');

		$this->contactRepository->update($id, $request->all());
		
		 return response('1', 200);
	}

	public function delete(Request $request)
	{$id=$request->input('index');
	
		$this->contactRepository->destroy($id);
		//$this->userRepository->update($id, $request->all());
return response($id, 200); 
		//return redirect()->back();
	}

}