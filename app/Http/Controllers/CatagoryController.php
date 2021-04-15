<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;

class CatagoryController extends Controller
{
    public function catshow(){

        $data = Catagory::all();
       
        return view('catlist',['keys'=>$data]);
     }

     

     public function catlistadd(Request $request){

        $request->validate([
            'catagory_name'=>'required|unique:catagories',
             
        ]);

        $catagory = new Catagory;
        $catagory->catagory_name =$request->get('catagory_name');
         
        $catagory->save();

        $request->session()->flash('message','catagory inserted successfully');

         return redirect('catlist');
    }

    public function catdelete(Request $request,$id){

        $data = Catagory::find($id);
        $data->delete();

        $request->session()->flash('message','catagory Deleted successfully');
        
        return redirect('catlist');
    }


     public function catedit($id){
         
        $data = Catagory::find($id);
        return view('catedit',['data'=>$data]);

     }

    public function catupdate(Request $request){

        $request->validate([
           
            'catagory_name'  => 'required',
             
             
        ]);

        $data = Catagory::find($request->id);
        $data->catagory_name = $request->catagory_name;
         
        $data->save();

        $request->session()->flash('message','catagory Updated successfully');

        return redirect('catlist');
    }



}
