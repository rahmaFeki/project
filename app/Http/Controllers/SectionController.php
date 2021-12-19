<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\SectionRepository;
use Session;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
 
    protected $sectionRepository;

    protected $nbrPerPage = 4;

    public function __construct(SectionRepository $sectionRepository)
    { 
		$this->middleware('auth');
		$this->sectionRepository = $sectionRepository;
	}

	public function index()
	{ 
		$sections = $this->sectionRepository->getPaginate($this->nbrPerPage);
		
		$links = $sections->setPath('');

return view("gestion_section",["sections"=>$sections,"links"=>$links])->render();
	

	}
	



	public function store(Request $request)
	{ 
	   $validator = Validator::make($request->all(), [
       
        'image'=> 'image| mimes:jpeg,png,jpg,gif,svg|max:2048'
      
	
    ],
	[


	]);
	  if ($validator->fails())
    {    return response()->json(['errors'=> $validator->errors()->all()]);
      // return response($validator->errors()->all(), 200); 
    }
	$titre=$request->input('titre'); 
	$description=$request->input('description');
	$imageName=null;
    if ($request->file('image')) {
	
        $imagePath = $request->file('image');
        $imageName = $imagePath->getClientOriginalName();
        $lastInsertedID =Section::all()->last();
		if($lastInsertedID!=null)
		$lastInsertedID =Section::all()->last()->id+1;
		else
		$lastInsertedID=0;
       
        $imageName=$lastInsertedID.'_'.$imageName;
        $path = $request->file('image')->storeAs('public', $imageName);
       
   
    }

	$section = $this->sectionRepository->store(
		$titre,$description,$imageName
				
					);
					
			 
					return response($section, 200);

  
   

  

	 
		
		//return redirect('user')->withOk("L'utilisateur " . $user->name . " a �t� cr��.");
		//return redirect("personnels")->with('status', '1');
	}

  


	public function delete(Request $request)
	{$id=$request->input('index');
	
		$this->sectionRepository->destroy($id);
		//$this->userRepository->update($id, $request->all());
return response($id, 200); 
		//return redirect()->back();
	}

}