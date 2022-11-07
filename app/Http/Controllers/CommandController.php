<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\InstructionLevel;
use http\Message;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use App\Models\Style;
use DB;
use Session;


class CommandController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['checkUserEmailExists']]);

    }

    public function index(){
        $user_id = \Auth::user()->id;

        $style = Style::where('user_id', '=', $user_id)->first();
        $styleType = array();
        if($style) {
            if ($style->activist > 0) {
                array_push($styleType, 'activist');
            }
            if ($style->reflector > 0) {
                array_push($styleType, 'reflector');
            }
            if ($style->sensing > 0) {
                array_push($styleType, 'sensing');
            }
            if ($style->intuitive > 0) {
                array_push($styleType, 'intuitive');
            }
            if ($style->visual > 0) {
                array_push($styleType, 'visual');
            }
            if ($style->verbal > 0) {
                array_push($styleType, 'verbal');
            }
            if ($style->sequential > 0) {
                array_push($styleType, 'sequential');
            }
            if ($style->global > 0) {
                array_push($styleType, 'global');
            }

        }else{
            return redirect()->route('style.start');
        }

        $level = Level::where('user_id', '=', $user_id)->first();


        if(empty($level->k_level)) {
            return view('recommended.null');
        }else{
            $colevel = InstructionLevel::where('level','like', $level->k_level)->first();
            // var_dump($colevel->id);
            $courses = Course::where('instruction_level_id', '=', $colevel->id)->first();


         $keywords = explode(",",$courses->keywords);

           //  var_dump($keywords);
          //   var_dump($styleType);

         $result = array_intersect($keywords ,$styleType );


       // var_dump($result);

        if(is_null($result)){
            return view('recommended.null');
        }else{
            return view('recommended.course')->with(compact('courses'));
        }
       }
    }
}