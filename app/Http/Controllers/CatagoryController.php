<?php

namespace App\Http\Controllers;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    //
    public  function Register()
    {
        return view('catagory.register');
    }
      function store(Request $request)
      
      {
        $catagory =new Catagory();
        $catagory->id = $request->id;
        $catagory->name = $request->name;
       
       $is_saved = $catagory->save();
      if($is_saved){
      echo "  Record saved successfully.";
                 }
      else{
       echo " something went to wrong.please try again";
         }
  
    }  
    public function getall()
    {
      $catagory=Catagory::all();
      return view('catagory.list', compact('catagory'));
    }
    public function getbyId()
    {

    }
    public function delete()
    {
  Catagory::where('id', $id)->delete();
    return redirect('catagory/list');
      
   }
   
   public function search($id)
       {
        $catagory = Catagory::where('id',$id)->first();
        return view('catagory.search', compact('catagory'));
       } 
}
