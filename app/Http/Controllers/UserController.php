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
        $categories['org_id']=$org_id;
        echo json_encode($categories);
    }
    public function get_org(){

        $orgs=array();
        $orgs['organizations']=DB::table('organization')->select('org_name')->get();
        echo json_encode($orgs);
    }
    public function register_second(Request $request){
        $token=$request->input('token');
        if($token==""){
        $id=$request->input('user_id');
        $user=User::find($id);
        $user->password=sha1($request->input('password'));
        $user->email=$request->input('email');
        $user->address=$request->input('address');
        $user->org_id=$request->input('org_id');
        $org_id=$request->input('org_id');
        $region_name=$request->input('region_name');
        $region=Region::where('region_name','=',$region_name)->where('org_id','=',$org_id)->firstOrFail();
        $region_id=$region->region_id;
        $user->region_id=$region_id;
            
        } else{
        }
    }

}
