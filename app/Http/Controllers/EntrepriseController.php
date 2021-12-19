<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Repositories\EntrepriseRepository;
use App\Models\Entrep;
class EntrepriseController extends Controller
{

    protected $entrepriseRepository;

    protected $nbrPerPage = 4;

    public function __construct(EntrepriseRepository $entre)

    {  $this->middleware('auth');
		$this->entrepriseRepository=$entre;
	}

	public function index()
	{ 
		//$jours = $this->jourFerieRepository->getPaginate($this->nbrPerPage);
		
		//$links = $jours->setPath('');

//return view("jour_ferie",["jours"=>$jours])->render();
$lastInsertedID=0;
if(Entrep::all()->last()!=null)
$lastInsertedID =Entrep::all()->last()->id;
$entreprise=$this->entrepriseRepository->getById($lastInsertedID);


	return view("entreprise",["entre"=>$entreprise]);

	}


	public function store(Request $request)
	{ 
	   $validator = Validator::make($request->all(), [
        'nom' => 'required',
        'email' => 'required|email',
		'adr' => 'required',
		'contenu' => 'required',
    ],
	[
		'email.email'=>'Adresse email invalide!',
	'nom.required'=>'Le champ nom est requis!',
    'email.required'=>'Le champ email est requis!',
	'adr.required'=>'Le champ adresse est requis!',
	'contenu.required'=>'Le champ contenu est requis!',
	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
	 
		$jour = $this->entrepriseRepository->store(
	$request->all()
		);
 return response($jour, 200);	
		//return redirect('user')->withOk("L'utilisateur " . $user->name . " a �t� cr��.");
		//return redirect("personnels")->with('status', '1');
	}


	public function update(Request $request)
	{  
		$id=$request->input('id');
		$this->entrepriseRepository->update($id, $request->all());
		
		 return response('1', 200);
	}

	public function destroy(Request $request)
	{$id=$request->input('index');
	
		$this->jourFerieRepository->destroy($id);
		//$this->userRepository->update($id, $request->all());
return response($id, 200); 
		//return redirect()->back();
	}

}
