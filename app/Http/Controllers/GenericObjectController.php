<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenericObject;

class GenericObjectController extends Controller
{

    public function create(){
        $attributes = request()->validate([
            'content' => ['required','max:255']
        ]);

        GenericObject::create($attributes);

        return redirect('/');
    }

    public function read(){
        return view('welcome', ['objects' => GenericObject::all()]);
    }

    public function update(){
        $attributes = request()->all();
        $object = $this->find($attributes['content_id']);
        $object->content = $attributes['content'];
        $object->save();

        return redirect('/');
    }

    public function delete(){
        $attributes = request()->all();
        $object = $this->find($attributes['content_id']);

        $object->delete();

        return redirect('/');
    }

    private function find($id){
        return GenericObject::find($id);
    }
}
