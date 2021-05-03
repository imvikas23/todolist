<?php

namespace App\Http\Controllers;

use App\Models\todoapp;
use Illuminate\Http\Request;

class AppsController extends Controller
{
     public function showallData(){
          return view('fetchedData')->with('TodoArr',todoapp::all());
     }
     public function delete($id){
           todoapp::destroy(array('id',$id));
           return redirect('/');
     }
     public function create(){
         return view('createView');
     }
     public function todo_submit(Request $req){
         $todo =new todoapp;
         $todo->name=$req->input('name');
         $todo->save();
           return redirect('/');
        }
        public function edit($id){
            // $row = todoapp::find($id);
            // $name = $row->name;
            // return view('edit_todo')->with($name);
             return view('edit_todo')->with('TodoArr_name',todoapp::find($id));
        }
        public function edit_submit(Request $req ,$id){
            $todo = todoapp::find($id);
            $todo->name=$req->input('name');
            $todo->save();
           return redirect('/');

        }
   }

