<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function users()
    {
        $users = new Users();
        return view('admin.user.user', ['users' =>$users->getAllData()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $users = DB::table('users') ->where('id', $id) ->get();
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request, string $id)
    {
        $users = Users::find($request->id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role = $request->role;
        $users->save();
        return redirect('admin/user')->with('success', 'Baru Di Update?? cihh..');
    }

    public function destroy(string $id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('admin/user')->with('success', 'Yahh Dihapus,Nanti Jangan Nyesel Ya!!');
    }
}
