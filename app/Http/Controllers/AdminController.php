<?php



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Team;
use App\Image;
use App\Player;
use Input;
use Redirect;
use File;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
    	$teams = Team::all();
    	$images = Image::where('published', 'false')->orderBy('id', 'asc')->get();
        return view('home', ['teams' => $teams, 'images'=>$images]);
    }

    public function resetScore(){
    	$teams = Team::all();
    	foreach($teams as $team){
    		$team->score = 0;
    		$team->save();
    	}
    	return redirect()->back();

    }

    public function addImages(){
    	$a = 10;
    	for($i =0; $i <$a; $i++){
    		$image = new Image();
    		$image->name = "placeholder".$i;
    		$image->published = false;
    		$image->save();
    	}
    	return redirect()->back();

    }

    public function imageHandler(){
        $images = Input::get('images');
        if(Input::get("button_validate")){
            //validate
            foreach ($images as $key=>$val) {
                $imageDB = Image::where('name', $val)->first();
                $imageDB->published = 1;
                $imageDB->save();
            }
            return Redirect::back();
        }elseif (Input::get("button_remove")) {
            //refus;
            foreach ($images as $key=>$val) {
                $imageDB = Image::where('name', $val)->first();
                $name = $imageDB->name;
                $path = base_path('public/img/app/'.$name);
                unlink($path.'.png');
                $imageDB->delete();
            }
            return Redirect::back();
        }
    }

    public function getImages(){
        $images = Image::where('published', 1)->orderBy('name', 'asc')->get();
        return $images;
    }

    public function uploadImages(){
        $image = new Image();
        if(Input::get("action")){
            $image->name = Input::get("name");
            $image->published = 0;
            $image->idPlayer = Input::get("idPlayer");
            $image->save();
            if(Input::file('image')->isValid()){
                $destinationPath = base_path('public/img/app/');
                $extension = Input::file('image')->getClientOriginalExtension();
                $fileName = Input::get("name").'.'.$extension;
                Input::file('image')->move($destinationPath, $fileName); 
            }
        }
        return Redirect::back();
    }

    public function attributeID(){
        $player = new Player();
    }
}
