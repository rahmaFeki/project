<?php

namespace App\Http\Controllers;
use App\Repositories\EntrepriseRepository;
use App\Repositories\GalleryRepository;
use App\Repositories\MissionRepository;
use App\Models\Mission;
use App\Models\Gallery;
use App\Models\Section;
use App\Models\Contact;
use App\Models\Choix;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
class PageController extends Controller
{
    protected $entrepriseRepository;
    public function __construct(EntrepriseRepository $entre,MissionRepository $mission,GalleryRepository $gallery)
    { 
        $this->entrepriseRepository=$entre;
        $this->missionRepository=$mission;
        $this->galleryRepository=$gallery;
	}

	public function index($id)
	{ 
        $tr = new GoogleTranslate(); 
        $tr->setSource('fr'); // Translate from English
        $gallery=Gallery::all();
        $sectionsNew=Section::all();
        $telephone=Contact::all();
        $entreprise=null;
        $missions=Mission::all();
        $choix=Choix::all();
        $missionsImag=[];
        $i=0;
        $contenu="bonjour";
        if($this->entrepriseRepository->getById(1)){
               $entreprise=$this->entrepriseRepository->getById(1);
               $contenu=$entreprise->contenu;
        }
              
        if($id==1){
      $sections=["Contactez-nous","Email","QUI SOMMES-NOUS ?","NOTRE MISSION","NOS VALEURS","POURQUOI NOUS CHOISIR ?","GALERIE"];
      $intitule1="Bienvenu Chez L'entreprise MSM";
      $intitule21="Créez Des Produits De Qualité";
      $intitule22="Pour L'avenir De L'industrie";
      $lang="FR";
      $langCode="1";
           // $tr->setTarget('fr'); // Translate to French  
          // $tr->translate($contenu); // Bonjour le monde!

           
        }
if($id==2){
    $sections=["Contact Us","Email"," Who We Are ?","OUR MISSION","Our Values","WHY CHOOSE US ?","GALLERY"];
    $intitule1="Welcome to the MSM company";
    $intitule21="Create Quality Products";
    $intitule22="For The Future Of Industry";
    $tr->setTarget('en');
    $lang="EN";
    $langCode="2"; // Translate to French
  //$contenu= $tr->translate($contenu);

    foreach ($missions as $value) {
      $value->lib=$tr->translate($value->lib);
    //array_push($missionsTrad, $tr->translate($value->lib));
   
    }
    foreach ($sectionsNew as $value) {
      $value->titre=$tr->translate($value->titre);
      $value->description=$tr->translate($value->description);
    //array_push($missionsTrad, $tr->translate($value->lib));
   
    }
    foreach ($choix as $value) {
      $value->lib=$tr->translate($value->lib);
    //array_push($missionsTrad, $tr->translate($value->lib));
   
    }
    // Bonjour le monde!
    
}
if(isset($entreprise->contenu))
$contenu=$tr->translate($entreprise->contenu);
else
$contenu="";	
return view("welcome",["entrep"=>$entreprise,"telephone"=>$telephone,"sectionNew"=>$sectionsNew,'gallery'=>$gallery,'missions'=>$missions,'sections'=>$sections,"intit1"=>$intitule1,"intit2"=>$intitule21,"intit3"=>$intitule22,"contenu"=>$contenu,"lang"=>$lang,"langCode"=>$langCode,"choix"=>$choix])->render();

	}
    public function indexDefault()

	{ 
    $telephone=Contact::all();
    
    $sectionsNew=Section::all();
    $gallery=null;
    $entreprise=null;
    $contenu=" ";
    $choix=Choix::all();
    if($this->entrepriseRepository->getById(1)){
           $entreprise=$this->entrepriseRepository->getById(1);
           $contenu=$entreprise->contenu;
    }
          
           if( $this->galleryRepository->getPaginate(2))     
           $gallery = $this->galleryRepository->getPaginate(2);
           $missions = $this->missionRepository->getPaginate(5);
        $sections=["Contactez-nous","Email","QUI SOMMES-NOUS ?","NOTRE MISSION","NOS VALEURS","POURQUOI NOUS CHOISIR ?","GALERIE"];
        $sections=["Contactez-nous","Email","QUI SOMMES-NOUS ?","NOTRE MISSION","NOS VALEURS","POURQUOI NOUS CHOISIR ?","GALERIE"];
        $intitule1="Bienvenu Chez L'entreprise MSM";
        $intitule21="Créez Des Produits De Qualité";
        $intitule22="Pour L'avenir De L'industrie";
        $lang="FR";
      $langCode="1";
      return view("welcome",["entrep"=>$entreprise,"sectionNew"=>$sectionsNew,'telephone'=>$telephone,'gallery'=>$gallery,'sections'=>$sections,'missions'=>$missions,"intit1"=>$intitule1,"intit2"=>$intitule21,"intit3"=>$intitule22,"contenu"=>$contenu,"lang"=>$lang,"langCode"=>$langCode,"choix"=>$choix])->render();

    }
}