<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    public function index ()
    {
        $member = Member::all();
        return view('master-user.index',compact('member'))
        ->with('i', (request()->input('page', 1)- 1) * 5);;
    }

    public function create(){
        $user = User::all();
        return view('master-user.create',compact('user'));
    }

    public function store(Request $request){
        // dd($request->all());
        $file = $request->photo;
        $filename = $file->getClientOriginalName();
            $upload = new Member;
            $upload->email = $request->email;
            $upload->name  = $request->name;
            $upload->birth = $request->birth;
            $upload->photo = $filename;
                $file->move(public_path(). '/img' , $filename);
            $upload->created_by = $request->created_by;
            $upload->updated_by = $request->updated_by;
                $upload->save();
            return redirect('members');
    }

    public function edit($id){
        $user = User::all();
        $member = Member::all();
        return view('master-user.update', compact('member', 'user'));
    }

    public function destroy($id){
        $delete = Member::findorfail($id);
            $file = public_path('img/').$delete->photo;
                if (file_exists($file)){
                    @unlink($file);
                }
            $delete->delete();
            return back();
    }
}
