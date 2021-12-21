<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\GalleryRepository;
use Session;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
 
    protected $galleryRepository;

    protected $nbrPerPage = 4;

    public function __construct(GalleryRepository $galleryRepository)
    { 
		$this->middleware('auth');
		$this->galleryRepository = $galleryRepository;
	}

	public function index()
	{ 
		$galleries = $this->galleryRepository->getPaginate($this->nbrPerPage);
		
		$links = $galleries->setPath('');

return view("gestion_gallery",["galleries"=>$galleries,"links"=>$links])->render();
	

	}
	



	public function store(Request $request)
	{ 
	   $validator = Validator::make($request->all(), [
      
        'nom'=> 'image|required| mimes:jpeg,png,jpg,gif,svg'
      
	
    ],
	[
	
	'nom.required'=>'Le champ image est requis!',

	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
   
    if ($request->file('nom')) {
       
        $imagePath = $request->file('nom');
        $imageName = $imagePath->getClientOriginalName();
        $lastInsertedID =Gallery::all()->last();
		if($lastInsertedID!=null)
		$lastInsertedID =Gallery::all()->last()->id+1;
		else
		$lastInsertedID=0;
      
        $imageName=$lastInsertedID.'_'.$imageName;
        $path = $request->file('nom')->storeAs('public', $imageName);
       
        $image = $this->galleryRepository->store(
    $imageName
            
                );
                
         
                return response($image, 200);
    }

  
   

  

	 
		
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
	
		$this->galleryRepository->destroy($id);
		//$this->userRepository->update($id, $request->all());
return response($id, 200); 
		//return redirect()->back();
	}

}