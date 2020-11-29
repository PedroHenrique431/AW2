<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelGender;

class GenderController extends Controller
{
    private $objGender;


    public function __construct()
    {
        $this->objGender=new ModelGender();
    }
    
    
    public function index()
    {
        $gender=$this->objGender->all();
        return view("indexG", compact('gender'));
    }

    
    public function create()
    {
        return view("createG");
    }

    
    public function store(Request $request)
    {
       $cad=$this->objGender->create([
            'name'=>$request->name,
       ]);
       if($cad){
           return redirect('genders');
       }
    }

    
    public function show($id)
    {
        $gender=$this->objGender->find($id);
        return view("showG", compact('gender'));
    }

    
    public function edit($id)
    {
        $gender=$this->objGender->find($id);
        return view("createG", compact('gender'));
    }

    
    public function update(Request $request, $id)
    {
        $this->objGender->where(['id'=>$id])->update([
            'name'=>$request->name,
        ]);
        return redirect('genders');
    }

    
    public function destroy($id)
    {
        $del=$this->objGender->destroy($id);
        return($del)?"sim":"não";
    }
}
