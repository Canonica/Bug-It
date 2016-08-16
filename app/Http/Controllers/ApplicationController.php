<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Team;
use App\Image;
use App\Player;
use Input;
use Redirect;
use File;

class ApplicationController extends Controller
{
    public function uploadImages(){
        $image = new Image();
        $image->name = Input::get("name").Input::get("idPlayer");
        $image->published = 0;
        $image->idPlayer = Input::get("idPlayer");
        $image->save();
        if(Input::file('image')->isValid()){
            $destinationPath = base_path('public/img/app/');
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = Input::get("name").Input::get("idPlayer").'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName); 
        }
        return $image->name;
    }

    public function attributeID(){
        $player = new Player();
        $player->save();
        return $player->id;
    }

    public function addPoints(){
    	$team = Team::where('name', Input::get('team'))->first();
    	$team->points = $team->points + Input::get('points');
    	$team->save();
    	return Redirect::Back();
    }
}
