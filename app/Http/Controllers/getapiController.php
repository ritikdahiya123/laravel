<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class getapiController extends Controller
{
    //
    function list($id=null){
        return $id?Customer::find($id):Customer::all();
    }
    function post(Request $request){
         $user= new Customer;
         
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->image=$request->image;
        $user->created_at=$request->created_at;
        $user->updated_at=$request->updated_at;
        $user->save();

    }
    function put(Request $request){
        $user=Customer::find($request->id);
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password=$request->password;
       $user->image=$request->image;
       $user->created_at=$request->created_at;
       $user->updated_at=$request->updated_at;
       $user->save();

   }
   function search($id){
    return Customer::where('id',$id)->get();

   }
   function delete($id){
     Customer::where('id',$id)->delete();
     return "data deleted";

   }
}
