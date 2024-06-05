<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Hash;
 
use Auth;
class AuthController extends Controller
{
 
  public function adminRole()
    {
      $user         =  new User();
      $user->name   =  'Admin';
      $user->email   =  'developer1@gmail.com';
      $user->password = Hash::make('1234');
      $user->save();
 
      $admin = Role::where('slug','admin')->first();
 
      $user->roles()->attach($admin);
    }
 
   
}