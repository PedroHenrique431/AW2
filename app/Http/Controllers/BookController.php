<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\ModelGender;

class BookController extends Controller
{
    private $objGender;
    private $objBook;


    public function __construct()
    {
        $this->objGender=new ModelGender();
        $this->objBook=new ModelBook();
    }
    
    
    public function index()
    {
        $book=$this->objBook->all();
        return view("index", compact('book'));
    }

    
    public function create()
    {
        $genders=$this->objGender->all();
        return view("create", compact('genders'));
    }

    
    public function store(Request $request)
    {
       $cad=$this->objBook->create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'id_gender'=>$request->id_gender,
       ]);
       if($cad){
           return redirect('books');
       }
    }

    
    public function show($id)
    {
        $book=$this->objBook->find($id);
        return view("show", compact('book'));
    }

    
    public function edit($id)
    {
        $book=$this->objBook->find($id);
        $genders=$this->objGender->all();
        return view("create", compact('book','genders'));
    }

    
    public function update(Request $request, $id)
    {
        $this->objBook->where(['id'=>$id])->update([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'id_gender'=>$request->id_gender,
        ]);
        return redirect('books');
    }

    
    public function destroy($id)
    {
        $del=$this->objBook->destroy($id);
        return($del)?"sim":"não";
    }
}
