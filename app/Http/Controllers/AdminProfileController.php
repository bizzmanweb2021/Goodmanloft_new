<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use Auth;

class AdminProfileController extends Controller
{

    public function UserView($id)
    {

       $data['User'] =User::where('Membertype','1')
                               ->where('id',$id)->first();
        return view('Dashboard.user_view',$data);
    }

    public function UserReg_details()
    {
         $data['Users']=User::where('Membertype','1')->get();
      return view('Dashboard.user_list',$data);
    }

}
