<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\User;
use App\Models\Products;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }
    public function registration(){
        return view('registration');
    }
    public function login(){
        return view('login');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function products(){
        return view('layouts.products');
    }
    public function updateproductsview(){
    $products = Products::all();
    return view('layouts.updateproducts', compact('products'));
}

    public function register(Request $request){
        $user= new Customer;
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $filename=time().".rs.".$request->file('image')->getClientOriginalExtension();
         $request->file('image')->storeAs('public/uploads',$filename);
        $user->image=$filename;

        $user->save();
        return redirect('/register/view');
    }
    public function user(Request $request){
        // $user= new User;
        $user = User::where('email', $request['email'])->first();
 if($user){
    return 'user already regitered';
//    return redirect ('login');
 }
 else{
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $filename=time().".rs.".$request->file('image')->getClientOriginalExtension();
         $request->file('image')->storeAs('public/uploads',$filename);
        $user->image=$filename;
    $user->save();
    // return redirect('/register/view');
    return "user-added";
 }
    }        
 public function loginuser(Request $request){
    // $user = new User;
    $user = User::where('email', $request['email'])->first();

    if ($user) {
        if ($request['password'] == $user->password) {
            // Assuming $data is defined somewhere in your code
            // return view('show-user')->with($data);
            return redirect('dashboard');
        } else {
            return "Incorrect password";
        }
    } else {
        return "Invalid email";
    }
  }

    
    public function view(){
        $customer=Customer::all();
        $data=compact('customer');
        return view('show-user')->with($data);
    }
    public function delete($id){
        $customer=Customer::find($id);
        $imagePath = public_path('storage/uploads/' . $customer->image);

    if (file_exists($imagePath)) {
        unlink($imagePath); // Delete the image file
    }
    Customer::find($id)->delete();

        return redirect()->back();
        // echo "<pre>";
        // print_r($customer);

    }
    public function update($id){
      $customer =Customer::find($id);
      if(is_null($customer)){
        return redirect('register/view');
      }
       if(!is_null($customer)){
        $url=url('/register/updateusers').$id;
            $title='user update';
            $data=compact('customer','url','title');
            return view('update')->with($data);
      }

    }
    public function allproducts(Request $request){
        $product=new Products();
        $product->name=$request['name'];
        $product->price=$request['price'];
        $product->size=$request['size'];
        $product->attribute=$request['color'];
        $product->quantity=$request['quantity'];
        $product->status=$request['status'];



    $product->save();
    // return redirect('/register/view');
    return "product-added";
 }
    public function updateuser($id,Request $request){
        $url=url('register/view');
        

        $customer=Customer::find($id);
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->password=$request['password'];
        $customer->save();
        // return redirect('form');
        return redirect($url);


    }
   

}


