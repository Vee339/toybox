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
}
