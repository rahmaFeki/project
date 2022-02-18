<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\MissionRepository;
use Session;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
 
    protected $missionRepository;

    protected $nbrPerPage = 4;

    public function __construct(MissionRepository $missionRepository)
    { 
		$this->middleware('auth');
		$this->missionRepository = $missionRepository;
	
	
		
	}

	public function index()
	{ 
		if (!file_exists('./storage')) {
			symlink("../storage/app/public", "./storage");
		}
		$missions = $this->missionRepository->getPaginate($this->nbrPerPage);
		
		$links = $missions->setPath('');

return view("mission",["choix"=>$missions,"links"=>$links])->render();
	

	}
	



	public function store(Request $request)
	{ 
	   $validator = Validator::make($request->all(), [
        'lib'=> 'required',
        'image'=> 'image|required| mimes:jpeg,png,jpg,gif,svg|max:2048'
      
	
    ],
	[
	'lib.required'=>'Le champ libellé est requis!',
	'image.required'=>'Le champ image est requis!',

	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
   
    if ($request->file('image')) {
		
        $imagePath = $request->file('image');
        $imageName = $imagePath->getClientOriginalName();
        $lastInsertedID =Mission::all()->last();
		if($lastInsertedID!=null)
		$lastInsertedID =Mission::all()->last()->id+1;
		else
		$lastInsertedID=0;
        $lib=$request->input('lib');
        $imageName=$lastInsertedID.'_'.$imageName;
        $path = $request->file('image')->storeAs('public', $imageName);
       
        $mission = $this->missionRepository->store(
    $lib,$imageName
            
                );
                
         
                return response($mission, 200);
    }

  
   
	}

  




	public function update(Request $request)
	{  
		 $validator = Validator::make($request->all(), [
        'lib' => 'required',
     
		
    ]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
		$id=$request->input('id');
		if ($request->file('image')) {
       
			$imagePath = $request->file('image');
			$imageName = $imagePath->getClientOriginalName();
		
			$lib=$request->input('lib');
			$imageName=$id.'_'.$imageName;
			$path = $request->file('image')->storeAs('public', $imageName);
		   
			$mission = $this->missionRepository->store(
		$lib,$imageName
				
					);
					
					$mission=$this->missionRepository->update($id, $lib,$imageName);
		
					return response()->json(['img'=>$imageName]);	 
					
		}
	
	}

	public function delete(Request $request)
	{$id=$request->input('index');
	
		$this->missionRepository->destroy($id);
		//$this->userRepository->update($id, $request->all());
return response($id, 200); 
		//return redirect()->back();
	}

}