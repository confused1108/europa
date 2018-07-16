<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Region;
use App\Complaint;
use App\Regions_link;
use App\Leave;
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
        if($token=="21075d7b49354135c052c6dc2cd226bd86aff6f7"){
        $id=$request->input('user_id');
        $user=User::find($id);
        $user->password=sha1($request->input('password'));
        $user->email=$request->input('email');
        $region_name=$request->input('region_name');
        $org_id=$request->input('org_id');
        $region=Region::where('region_name','=',$region_name)->where('org_id','=',$org_id)->firstOrFail();
        $region_id=$region->region_id;
        $user->region_id=$region_id;
        $user->address=$request->input('address');
        $user->org_id=$request->input('org_id');
        $save=$user->save();
            if(!$save){
                $val="failed";
            }
            else{
                $val="success";
            }
        } else{
            $val="failed";
        }
        $data=array(
            "result"=>array(
                array(
                    "status"=>$val
                )
            )
        );
        echo json_encode($data);
    }
    public function login(Request $request){
        $token=$request->input('token');
        if($token=="21075d7b49354135c052c6dc2cd226bd86aff6f7"){
        $email=$request->input('email');
        $password=sha1($request->input('password'));
        $users_count = DB::table('users')
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->count();
        if($users_count>0){
            $user=DB::table('users')
                ->where('email', '=', $email)
                ->where('password', '=', $password)
                ->first();
            $org_id= $user->org_id;
            $user_id= $user->user_id;
            $val="success";
            $data=array(
                "result"=>array(
                    array(
                        "status"=>$val
                    ),
                    array(
                        "org_id"=>$org_id
                    ),
                    array(
                        "user_id"=>$user_id
                    )
                )
            );
        } else{
            $val="failed";
            $data=array(
                "result"=>array(
                    array(
                        "status"=>$val
                    )
                )
            );
        }
        } else{
            $val="failed";
            $data=array(
                "result"=>array(
                    array(
                        "status"=>$val
                    )
                )
            );
        }
        echo json_encode($data);
    }
    public function complaints(Request $request){
        $org_id=$request->input('org_id');
        $data=array();
        $data['categories']=DB::table('categories')->select('cat_name','cat_id')->where('org_id','=',$org_id)->get();
        echo json_encode($data);
    }
    
    public function make_complain(Request $request){
        $token=$request->input('token');
        if($token=="21075d7b49354135c052c6dc2cd226bd86aff6f7"){
            $com=new Complaint();
            $com->user_id=$request->input('user_id');
            $com->region_id=$request->input('region_id');
            $region_id=$request->input('region_id');
            $cat_id=$request->input('cat_id');
            $worker=Regions_link::where('region_id','=',$region_id)->where('cat_id','=',$cat_id)->firstOrFail();
            $worker_id=$worker->worker_id;
            $com->worker_id=$worker_id;
            $com->org_id=$request->input('org_id');
            $com->cat_id=$request->input('cat_id');
            $com->problem=$request->input('problem');
            $com->time=$request->input('time');
            $com->date_registered=date("d-m-y");
            $com->status="0";
            $save=$com->save();
            if(!$save){
                $val="failed";
            }
            else{
                $val="success";
            }
        } else{
            $val="failed";
        }
        $data=array(
            "result"=>array(
                array(
                    "status"=>$val
                )
            )
        );
        echo json_encode($data);
    }
    public function check_complaints(Request $request){
        $org_id=$request->input('org_id');
        $user_id=$request->input('user_id');
        $data=array();
        $data['complaints']=DB::table('complaints')->select('complain_id','problem','time','date_registered','date_resolved','status')->where('org_id','=',$org_id)->where('user_id','=',$user_id)->get();
        echo json_encode($data);
    }
    public function complaint_status(Request $request){
        $complain_id=$request->input('complain_id');
        $data=array();
        $com=Complaint::find($complain_id);
        $com->status="1";
        $save=$com->save();
        if(!$save){
            $val="failed";
        }
        else{
            $val="success";
        }
        $data=array(
            "result"=>array(
                array(
                    "status"=>$val
                )
            )
        );
        echo json_encode($data);
    }
    public function apply_leave(Request $request){
        $token=$request->input('token');
        if($token=="21075d7b49354135c052c6dc2cd226bd86aff6f7"){
            $leave=new Leave();
            $leave->user_id=$request->input('user_id');
            $user_id=$request->input('user_id');
            $user=User::where('user_id','=',$user_id)->firstOrFail();
            $region_id=$user->region_id;
            $address=$user->address;
            $leave->region_id=$region_id;
            $leave->org_id=$user->org_id;
            $leave->address=$address;
            $leave->reason=$request->input('reason');
            $leave->baggage=$request->input('baggage');
            $leave->address_during_leave=$request->input('address_during_leave');
            $leave->remote_number=$request->input('remote_number');
            $leave->from_date=$request->input('from');
            $leave->to_date=$request->input('to');
            $leave->date_registered=date("d/m/y");
            $leave->status="0";
            $save=$leave->save();
            if(!$save){
                $val="failed";
            }
            else{
                //Write code to send notifications to wardens
                //using laravel push notifications instead of nodejs
                $val="success";
            }
        } else{
            $val="failed";
        }
        $data=array(
            "result"=>array(
                array(
                    "status"=>$val
                )
            )
        );
        echo json_encode($data);
    }
    public function check_leave(Request $request){
        $org_id=$request->input('org_id');
        $user_id=$request->input('user_id');
        $data=array();
        $data['applications']=DB::table('leave_apply')->select('from_date','to_date','status')->where('org_id','=',$org_id)->where('user_id','=',$user_id)->get();
        echo json_encode($data);
    }
    public function particular_leave($id){;
        $data=Leave::find($id);
        echo json_encode($data);
    }
}
