<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Organization;
use App\Worker;
use Illuminate\Http\Request;
use App\Apply;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function workers(){
        $org_id=Session::get('org_id');
        //$workers=Worker::where('org_id','=',$org_id)->get();
        $workers=DB::table('workers')->where('workers.org_id','=',$org_id)->join('categories','workers.category_id','=','categories.id')->get();
        $categories=DB::table('categories')->where('org_id','=',$org_id)->get();
        //print_r($categories);
        return view('admin.workers')->with('workers',$workers)->with('categories',$categories);
    }
    public function addworker(Request $request){

        $worker= new Worker();
        $worker->category_id=$request->input('category');
        $org_id=Session::get('org_id');
        $worker->org_id=$org_id;
        $worker->name=$request->input('name');
        $worker->username=$request->input('username');
        $worker->number=$request->input('number');
        $worker->address=$request->input('address');
        $worker->password=sha1($request->input('password'));
        $no='0';
        $worker->complaints=$no;
        $worker->save();
        print_r("Success");
        //return redirect('/thanks');
    }
    public function addcategory(Request $request){

        $cat= new Category();
        $org_id=Session::get('org_id');
        $cat->org_id=$org_id;
        $cat->cat_name=$request->input('cat_name');
        $cat->save();
        //print_r("Success");
        return redirect('/admin/workers/');
    }
}
