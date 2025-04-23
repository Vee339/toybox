<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;

class ToysController extends Controller
{
    //

    public function list(){
        return view('toys.list', [
            'toys' => Toy::all()
        ]);
    }
    public function delete(Toy $toy){
        $toy->delete();

        return redirect('/console/toys/list')
            ->with('message', 'Toy has been deleted');

    }

    public function addForm(){
        return view('toys.add');
    }

    public function add(){
        $attributes = request()->validate([
            'name' => 'required',
            'child_id' => 'required',
            'image' => 'nullable',
            'condition' => 'required',
            'price' => 'required',
            'description' => 'required',
            'material' => 'required'
        ]);

        $toy = new Toy();
        $toy->name = $attributes['name'];
        $toy->child_id = $attributes['child_id'];
        $toy->image = $attributes['image'];
        $toy->condition = $attributes['condition'];
        $toy->price = $attributes['price'];
        $toy->description = $attributes['description'];
        $toy->material = $attributes['material'];

        $toy->save();

        return redirect('/console/toys/list')
            ->with('message', 'Toy has been added successfully');
    }

    public function editForm(Toy $toy){
        return view('toys.edit',[
            'toy' => $toy
        ]);
    }

    public function edit(Toy $toy){
        $attributes = request()->validate([
            'name' => 'required',
            'child_id' => 'required',
            'image' => 'nullable',
            'condition' => 'required',
            'price' => 'required',
            'description' => 'required',
            'material' => 'required'
        ]);

        $toy->name = $attributes['name'];
        $toy->child_id = $attributes['child_id'];
        $toy->image = $attributes['image'];
        $toy->condition = $attributes['condition'];
        $toy->price = $attributes['price'];
        $toy->description = $attributes['description'];
        $toy->material = $attributes['material'];

        $toy->save();

        return redirect('/console/toys/list')
            ->with('message', 'Toy has been updated successfully');
    }

}
