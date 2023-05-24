<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\RecipeModel;

class RecipesController extends Controller
{
    public function comments():View{
        return view('recipecomment');
    }
    public function submit(Request $request):View{
        $validation = $request->validate([
            'comm' => 'required'
         ]);
         $comment = new RecipeModel();
         $comment->text = $request->input('comm');
         $variable = ['vid' => $comment->text];
         return view('yourcomment', $variable);
    }
    public function show():View{
        $food = ['Борщ', 'Пиріг', 'Гьодза', 'Цезар', 'Салат', 'Пельмені'];

        return view('dishes', compact('food'));
    }
    
}
