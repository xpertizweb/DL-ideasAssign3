<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Catagory;

class TaskController extends Controller
{
  public  function taskshow(){

        $data = Task::with('catagory')->get();
        
        return view('tasklist',['keys'=>$data]);
     }

  public function taskadd(){
  
    $catagories = Catagory::all();
    return view('taskadd',compact('catagories'));
}
     

     public function tasklistadd(Request $request){

        $request->validate([
            'task_code'=>'required|unique:tasks',
            'task_name'=>'required|unique:tasks',
            'task_info'=>'required|unique:tasks',
        ]);

        $data = new Task;
        $data->catagories_id =$request->catagory_id;
        $data->task_code =$request->task_code;
        $data->task_name =$request->task_name;
        $data->task_info =$request->task_info;
        $data->save();

        $request->session()->flash('message','Task inserted successfully');

         return redirect('tasklist');
    }

   public function taskdelete(Request $request,$id){

        $data = Task::find($id);
        $data->delete();

        $request->session()->flash('message','Task Deleted successfully');
        
        return redirect('tasklist');
    }


    public function taskedit($id){
        
        $catagories = Catagory::all();
        $data = Task::find($id);
        
        return view('taskedit',compact('catagories','data'));

     }

    public function taskupdate(Request $request){
        // return $request;
        $request->validate([
           
            'task_code'=>'required',
            'task_name'=>'required',
            'task_info'=>'required',
             
        ]);
        // return $request;

        $data = Task::find($request->id);
        $data->catagories_id =$request->catagory_id;
        $data->task_code =$request->task_code;
        $data->task_name =$request->task_name;
        $data->task_info =$request->task_info;
        $data->save();

        return redirect('tasklist');
    }
}
