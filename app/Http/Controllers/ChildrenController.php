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
}
