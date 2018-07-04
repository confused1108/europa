<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register_first(Request $request){
        $user=new User();
//        $admin->save();
        $user->name=$request->input('name');
        $user->number=$request->input('number');
        $user->roll_no=$request->input('roll_no');
        $org_name=$request->input('org_name');
        $categories=array();
        $categories['organization']=DB::table('organization')->select('org_server as domain')->where('org_name','=',$org_name)->get();
        $categories['regions']=DB::table('regions')->select('region_name','region_id')->join('organization','organization.org_id','=','regions.org_id')->get();
        $org=Organization::where('org_name','=',$org_name)->firstOrFail();
        $org_id=$org->org_id;
        $user->org_id=$org_id;
        $user->save();
        $categories['user_id']=$user->user_id;
        echo json_encode($categories);
        //echo $id;
//        return redirect('/admin/subadmin');
    }
}
