<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Organization;
use Illuminate\Http\Request;
use App\Apply;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
//use DB;

class PagesController extends Controller
{
    public function index(){
        return view('home.main');
    }
    public function apply(){
        return view('home.apply');
    }
    public function pricing(){
        return view('home.pricing');
    }
    public function login(){
        return view('home.login');
    }
    public function submit(Request $request){

        $apply= new Apply();
        $apply->name=$request->input('name');
        $apply->organization=$request->input('organization');
        $apply->email=$request->input('email');
        $apply->number=$request->input('number');
        $apply->package=$request->input('package');
        $apply->comment=$request->input('comment');
        $apply->designation=$request->input('designation');
        $no='0';
        $apply->accepted=$no;
        $apply->save();

        return redirect('/thanks');
    }
    public function organization(Request $request){
        $org=new Organization();
        $org->app_name=$request->input('app_name');
        $org->app_email=$request->input('app_email');
        $org->app_designation=$request->input('app_designation');
        $org->org_address=$request->input('org_address');
        $org->org_name=$request->input('org_name');
        $org->org_server=$request->input('org_server');
        $org->app_number=$request->input('app_number');
        $org->app_email_alt=$request->input('app_email_alt');
        $org->package=$request->input('package');
        $org->package_active='1';
        $org->package_started=date("Y-m-d");
        $org->package_expired=date("Y-m-d");
        $org->save();

        $id=$org->org_id;

        $admin=new Admin();
        $admin->org_id=$id;
        $admin->name=$request->input('app_name');
        $admin->username=$request->input('username');
        $admin->email=$request->input('app_email');
        $admin->alt_email=$request->input('app_email_alt');
        $admin->designation=$request->input('app_designation');
        $admin->password=sha1($request->input('password'));
        $admin->save();

        return redirect('/login');
    }
    public function thanks(){
        return view('home.thanks');
    }
    public function details($id){
        $app = Apply::find($id);
        return view('user.password')->with('app',$app);
    }
    public function userlogin(Request $request){
        $username=$request->input('username');
        $password=sha1($request->input('username'));
        $users_count = DB::table('admin')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->count();
        if($users_count>0){
            $admin=DB::table('admin')
                ->where('username', '=', $username)
                ->where('password', '=', $password)
                ->first();
            $org_id= $admin->org_id;
            $admin_id= $admin->admin_id;
            Session::set('admin_id', $admin_id);
            Session::set('org_id', $org_id);
        }
        return redirect('/admin/dashboard');
    }
}
