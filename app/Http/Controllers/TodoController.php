<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;// database con
use Illuminate\Support\Facades\Input;

class TodoController extends Controller
{
  
    //
public function index()
   {
   	$result=DB::table('welcome')->get();
 	return view('Todo.index',compact('result'));
   	return view('Todo.index');
   }








public function creat()
   {
   	return view('Todo.creat');
   }

public function store(Request $request)
   {
	$v =  \Validator::make($request->all(),
                    [
                        'product_name'=>'required',
                        'Price'=>'required',
                       
                    ]);


      if($v->fails())
           {
    
                return redirect()->back()->withErrors($v->errors());
            }  else {
     
//              
              $data=array(                     
                    'p_name'=>$request->product_name,// table fleid name
                    'Price'=>$request-> Price ,// table fleid name
                  
                   
                   
               );
               $i      =   DB::table('welcome')->insert($data);

              if($i >0)
                {
                    \Session::flash('message','todoHave Been Added Sucessfully');
                    return redirect('/Todo');
             }
               
            }
   }
public function edit($id)
  	 {
   	$data=DB::table('welcome')->where('id',$id)->first();
   	return view('Todo.update',compact('data'));
   }

public function update(Request $request)
	{
		$data=array(                     
                    'p_name'=>$request->product_name,// table fleid name
                    'Price'=>$request-> Price ,// table fleid name
                  
                   
                   
               );
	   	$i = DB::table('welcome')->where('id',$request['id'])->update($data);
	   	return redirect('/Todo');
	}

public function delete($id)
	{
	$i=DB::table('welcome')->where('id',$id)->delete();
	return redirect('/Todo');
	}

//UPLOAD A IMAGE
  public function upload()
{
  if (Input::hasFile('file')){
  echo ' uploaded<br/>';
  $file=Input::file('file');
  $file->move('uploads',$file->getClientOriginalname());
  echo'<img src="uploads/'.$file->getClientOriginalname().'"/>';
}}
}
