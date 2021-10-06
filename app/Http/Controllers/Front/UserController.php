<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
public function showUserName(){
    return 'Abdulator';
}

public function getIndex(){
//    $obj=new \stdClass();
//    $obj->name='abd';
//    $obj->id=5;
//    $obj->gender='male';
//    return view('abdulator',compact('obj'));

  //  return view('abdulator')->with('name','abd');

    $data=['a'=>'ahmad','b'=>'abd'];

    return view('abdulator')->with('data',$data);

}

}
