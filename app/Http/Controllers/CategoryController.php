<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    function index(){
        // eloquent model
        $categories = Category::get();
        // dump and die
        // query bilder
        // DB
        return view('category.index',compact('categories'));
    }
    public function show($id){
        $category = Category::find($id);
        return $category;
    }
    

    
    //DESTROY CONTROLLER FUNCTION
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index');
    }


    //Create CONTROLLER FUNCTIONS
    public function createNew(){
       
        return view('category.createNew');
    }
    public function save(Request $request){

        category::create
        ([ 'name'=> $request->name ]);

        return redirect()->route('category.index');
    }


    //UPDATE CONTROLLER FUNCTIONS
    public function update($id){
        $category = category::find($id);
        return view('category.update',compact('category'));
    }
    public function saveupdate($id, Request $request){

        category::find($id)->update        
        ([ 'name'=> $request->name ]);

        return redirect()->route('category.index');
    }
}

