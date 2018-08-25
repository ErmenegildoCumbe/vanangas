<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cliente;
use App\UserPermission;
use Auth;

class CustomAuthController extends Controller
{
   public function showLoginForm(){
       return view('authentication.login');
   }
   public function register(Request $request){
       $this->validation($request);
       $cliente = new Cliente;
       $user = new User;
       $userpermission = new UserPermission;
       $user->nome = $request->fname;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->apelido = $request->lname;
       $user->telefone = $request->phone;
       $user->tipoUsuario = 3;
       $user->estado = 1;
       $user->save();
       //gravar cliente
       $cliente->estado = 1;
       $cliente->tipoCliente = 1;
       $cliente->users_id = $user->id;
       $cliente->save();
       $userpermission->permission_id = 3;
       $userpermission->user_id = $user->id;
       $userpermission->save();
       Auth::login($user, true);
       return redirect('/home');

   }
   public function login(Request $request){
       $this->validate($request, [
        'email' => 'required|email|max:255',
        'pass' => 'requiredmax:255',
       ]);
       $remember = false;
       if(isset($request->remember)){
        $remember = true;
       }
       
       if( Auth::attempt(['email' => $request->email, 'password' => $request->password, 'estado' =>1], $remember)){
        return redirect('/home');
       }
    else{
       // return 
        return redirect()->back()->withInput( $request->only('email', 'remember') );
         
    }
   }
   public function logout(){
        Auth::logout();
        return redirect('/login');
   }
   protected function validation($request){
       return $this->validate($request, [
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'fname' =>'required|string|max:145',
        'lname' =>'string|max:45',
        'phone' =>'nullable|string|max:15',
       ]);
   }
}
