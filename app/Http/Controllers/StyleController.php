<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use App\Models\Style;
use DB;
use Session;


class StyleController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['checkUserEmailExists']]);

    }

    public function index(){
        $user_id = \Auth::user()->id;

        $style = Style::where('user_id', '=', $user_id)->first();
        if ($style === null){
            return view('style.exam')->with('user_id',$user_id);
        }else{
            return view('style.cant');
             }
        }


    public function exam(Request $request){

        $user_id = $request->input('user_id');
        $style = new style();


        $style->user_id = $user_id;
        $all_values = array_merge($request->all(), ['index' => 'value']);


         $type = array_count_values($all_values);

        
        // sensing & intuitive

         if ($type['sensing'] > $type['intuitive'] ){
             $sensing = $type['sensing'] - $type['intuitive'];
             $intuitive = 0 ;
         }else{
             $intuitive = $type['intuitive'] - $type['sensing'];
             $sensing = 0 ;
         }

        $style->sensing = $sensing ;
        $style->intuitive = $intuitive ;


        // visual & verbal

        if ($type['visual'] > $type['verbal'] ){
            $visual = $type['visual'] - $type['verbal'];
            $verbal = 0 ;
        }else{
            $verbal = $type['verbal'] - $type['visual'];
            $visual = 0 ;
        }

        $style->visual = $visual ;
        $style->verbal = $verbal ;


        $style->save();
        $style_id = $style->id;

        $styles = Style::where('id', '=', $style_id)->first();

        return view('style.end')->with('styles',$styles);


    }

}