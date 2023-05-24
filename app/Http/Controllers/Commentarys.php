<?php

namespace App\Http\Controllers;
use App\Models\Commentary;
use App\Models\Commentator;
use App\Models\Dish;
use App\Models\User_comment;
use Illuminate\Http\Request;
use Illuminate\View\View;
class Commentarys extends Controller
{
    public function index(){
        $r =  Commentary::get();
        return view('somesome', compact('r'));
    }
    public function store(Request $request):View{
        $validation = $request->validate([
            'comm' => 'required',
            'dish_id' => 'required',
            'commentator' => 'required'
         ]);
         $check = Commentator::select('name')->where('name', '=', $request->input('commentator'))->get();
         if($check == '[]'){
            $newuser = new Commentator();
            $newuser->timestamps = false;
            $newuser->name = $request->input('commentator');
            $newuser->save();
        }
         $comment = new Commentary();
         $comment->timestamps = false;
         $comment->text = $request->input('comm');
         $o = Dish::select('id')->where('dish_name', '=', $request->input('dish_id'))->first()->id;
         $comment->dish_id = "$o";
         $comment->save();
         $user_comm =  new User_comment();
        $user_comm->timestamps = false;
        $var1 = Commentator::select('id')->where('name', '=', $request->input('commentator'))->first()->id;
        $user_comm->commentator_id = "$var1";
        $user_comm->dish_id = "$o";
        $check_user = User_comment::select('*')->where('commentator_id', '=', $user_comm->commentator_id, 'and', 'dish_id', '=', $user_comm->dish_id)->get();
        if ($check_user == '[]'){
            $user_comm->save();
        }
         return self::index();
    }
    public function search(){
        return view('sort');
    }
    public function search_res(Request $request):View{
        $validation = $request->validate([
            'user_name' => 'required'
         ]);
         $check = Commentator::select('id')->where('name', '=', $request->input('user_name'))->get();
         if($check == '[]'){
            echo "Your user is invalid";
        }
        else{
            $newcheck = Commentator::select('id')->where('name', '=', $request->input('user_name'))->first()->id;
            $check = Commentator::find($newcheck);
        }
        return view('sort_result', compact('check'));
    }
}
