<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildrenController extends Controller
{
    //

    public function list(){
        return view("children.list", [
            'children' => Child::all()
        ]);
    }

    public function delete(Child $child){
        $child->delete();

        return redirect('/console/children/list')
            ->with('message', 'Child has been deleted');

    }

    public function addForm(){
        return view('children.add');
    }

    public function add(){
        $attributes = request()->validate([
            'name' => 'required',
            'image' => 'nullable',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ]);

        $child = new Child();
        $child->name = $attributes['name'];
        $child->image = $attributes['image'];
        $child->gender = $attributes['gender'];
        $child->date_of_birth = $attributes['date_of_birth'];

        $child->save();

        return redirect('/console/children/list')
            ->with('message', 'Child has been added successfully');
    }
}
