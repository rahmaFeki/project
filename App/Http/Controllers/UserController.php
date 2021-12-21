<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
 
    protected $userRepository;

    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
    { 
		//$this->middleware('auth')->except("indexLogin","login");
		//$this->middleware('admin')->except("indexLogin","login");
		$this->userRepository = $userRepository;
	}
	public function verifyUsername(Request $request)
	{ 
		   $validator = Validator::make($request->all(), [
  
		'username'=>'unique:users',
		'matricule'=>'unique:users',
	 'password' => 'confirmed'
    ]);
	if ($validator->fails())
    {    return response()->json(['errors'=>1]);
      // return response($validator->errors()->all(), 200); 
    }
	}
	public function index()
	{ 
		$users = $this->userRepository->getPaginate($this->nbrPerPage);
		
		$links = $users->setPath('');

return view("gestion_user",["users"=>$users,"links"=>$links])->render();
	

	}
	



	public function store(Request $request)
	{ 
	   $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string',
		'username'=>'unique:users|required',
	
    ],
	[
	'email.required'=>'Le champ email est requis!',
    'nom.required'=>'Le champ nom est requis!',
	 'password.required'=>'Le champ mot de pass est requis!',
	'prenom.required'=>'Le champ prenom est requis!',
	'username.required'=>'Le champ nom utilisateur  est requis!',

	'email.email'=>'adresse e-mail invalide!',
	'username.unique'=>'Le champ nom utilisateur est deja utilise!',

	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
	 
		$user = $this->userRepository->store(
	$request->all()
		);
 return response($user, 200);	
		//return redirect('user')->withOk("L'utilisateur " . $user->name . " a �t� cr��.");
		//return redirect("personnels")->with('status', '1');
	}
	public function username()
{
    return 'username';
}
	public function indexLogin(Request $request)
    { if(Auth::check()){
	
		 // return redirect("home");
	}
        return view('user');
    }  
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
				$user=Auth::user();
				return redirect("/entreprise/edit")->with('status', '1');
        }
  
        return redirect("login")->with('status', '1');
    }
	
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect("login");
    }
	public function show($id)
	{
		$user = $this->userRepository->getById($id);

		return view('show',  compact('user'));
	}



	public function update(Request $request)
	{   $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required',
        'username'=> 'required',
		
    ]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
		$id=$request->input('id');
		$this->userRepository->update($id, $request->all());
		
		 return response('1', 200);
	}

	public function delete(Request $request)
	{$id=$request->input('index');
	
		$this->userRepository->destroy($id);
		//$this->userRepository->update($id, $request->all());
return response($id, 200); 
		//return redirect()->back();
	}

}