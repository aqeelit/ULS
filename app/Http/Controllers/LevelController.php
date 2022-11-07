<?php

namespace App\Http\Controllers;

require_once 'knn/vendor/autoload.php';
use Phpml\Classification\KNearestNeighbors;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use DB;
use Session;


class LevelController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['checkUserEmailExists']]);

    }

    public function index(){
        $user_id = \Auth::user()->id;
        $user_email = \Auth::user()->email;

        $level = Level::where('email', '=', $user_email)->first();
        if ($level === null){
            return view('level.start')->with('user_id',$user_id);
        }else{
            $level_id = $level->id;
            if ($level->attempts < 3 ) {
                return view('level.exam')->with('level_id', $level_id);
            }else{
                return view('level.cant');
            }
        }


    }

    public function exam(Request $request){

        $user_id = $request->input('user_id');
        $level = new level();
        $user = User::find($user_id);



            $user_email = $user->email;

            $level->user_id = $user_id;
            $level->email = $user_email;
            $level->age = $request->input('age');
            $level->experience = $request->input('experience');


            $level->save();
            $level_id = $level->id;

            return view('level.exam')->with('level_id',$level_id);

        // var_dump($level);

     //  echo $level->age . " " . $user_email ;
    }

    public function calculate(Request $request)
    {

        $level_id = $request->input('level_id');
        $level = Level::find($level_id);

        $sum =  $request->input('q1');
        $sum += $request->input('q2');
        $sum += $request->input('q3');
        $sum += $request->input('q4');
        $sum += $request->input('q5');
        $sum += $request->input('q6');
        $sum += $request->input('q7');
        $sum += $request->input('q8');
        $sum += $request->input('q9');
        $sum += $request->input('q10');

//         echo $sum ."<br>" ;
//         echo $level_id;


        $level->grade = $sum ;

        if($level->attempts == '0'){
            $level->attempts = '1';
           // $level->save();
        }elseif ($level->attempts == '1'){
            $level->attempts = '2';
           // $level->update();
        }elseif ($level->attempts == '2'){
            $level->attempts = '3';
           // $level->update();
        }



        $samples = [
        [3,0,0],[3,1,2],[3,1,4],[3,2,6],[3,3,7],[2,0,1],[2,1,2],[2,2,3],[2,2,5],[2,2,6],
        [1,0,1],[1,1,2],[1,2,3],[1,2,5],
                   
        [3,0,6],[3,0,7],[3,1,8],[3,1,9],[3,2,8],[3,2,9],[3,2,9],[3,2,9],[3,3,6],[3,3,7],
        [2,0,5],[2,1,5],[2,2,5],[2,0,6.5],[2,1,7],[1,2,6.5],[1,0,5],[1,1,5],[1,2,5],
        [1,0,6.5],[1,1,6.5],[1,2,6.5],

        [3,0,9.5],[3,1,9.5],[3,2,9.5],[3,0,10],[3,1,10],[3,2,10],[2,0,7.5],[2,1,8],
        [2,2,9],[2,0,8],[2,1,9],[2,2,7.5],[1,0,6.5],[1,1,7],[1,2,6.5],[1,0,7],[1,1,6.5],
        [1,2,7],

        [1,0,7],[1,1,8],[1,2,8.5],[1,0,8],[1,1,8.5],[1,2,7],[1,1,7], [1,0,8.5],
        [2,3,10],[2,3,9],

        [1,0,8.5],[1,1,9],[1,2,10],[1,0,9],[1,1,10],[1,2,8.5],[1,3,10,],[1,3,9.5]
                   ];

        $labels = [
        'none','none','none','none','none','none','none','none','none','none','none',
        'none','none','none',
        'introductory','introductory','introductory','introductory','introductory',
        'introductory','introductory','introductory','introductory','introductory',
        'introductory','introductory','introductory','introductory','introductory',
        'introductory','introductory','introductory','introductory','introductory',
        'introductory','introductory',
        'intermediate','intermediate','intermediate','intermediate','intermediate',
        'intermediate','intermediate','intermediate','intermediate','intermediate',
        'intermediate','intermediate','intermediate','intermediate','intermediate',
        'intermediate','intermediate','intermediate',
        'Advanced','Advanced','Advanced','Advanced','Advanced','Advanced','Advanced',
        'Advanced','Advanced','Advanced',
        'Comprehensive','Comprehensive','Comprehensive','Comprehensive','Comprehensive',
        'Comprehensive','Comprehensive','Comprehensive'
         ];

        $classifier = new KNearestNeighbors();
        $classifier->train($samples, $labels);

        $prediction = $classifier->predict([$level->attempts,$level->experience ,$level->grade]);
        // echo $prediction;

        

        $level->k_level = $prediction;

        $level->Update();

        return view('level.end')->with('level',$level);

    }

}