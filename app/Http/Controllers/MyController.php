<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
      //  return view ('myview');
      $name ='Abdoulaye';
      $age =22;
      $tab=array('name'=> 'Abdoulaye', 'age' => 22);

      return view('myview' , $tab);
    }
}
