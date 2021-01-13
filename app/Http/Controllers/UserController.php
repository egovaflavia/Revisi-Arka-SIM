<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{

    public function index()
    {
        $data['user'] = User::all();
        return view('backend.user.index',$data);
    }

    public function add()
    {
        //
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $ids,$status)
    {
        $id = decrypt($ids);
        $statuss = decrypt($status);
        DB::table('users')->where('id',$id)->update(['status' => $statuss]);
        // dd($id,$statuss);
        return back()->with('pesan','Success');
    }

    public function delete($id)
    {
        //
    }
}
