<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::select('roles_id')->where('roles_id', '=', '1')->count() > 0) {
            $user = User::all();
            $role = Role::where('status', 1)->get();
            return view('admin.users-admin.users-admin-index', compact('user', 'role'));
        } elseif (User::select('roles_id')->where('roles_id', '=', '2')->count() > 0) {
            return view('admin.dashboard')->with('message', 'Anda tidak memiliki akses ke halaman ini');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(count($request->input('role')));
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|string|min:8|max:50|unique:users',
            'password' => 'required|string|confirmed|min:8|max:32'
        ]);

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'roles_id' => $request->role,
            'password' => bcrypt($request->password),
            'status' => 1
        ]);
        $hak = $request->input('role');
        for ($i = 0; $i < count($hak); $i++) {
            $role = RoleUser::create([
                'roles_id' => $hak[$i],
                'users_id' => $users->id
            ]);
        }
        return redirect('/users-admin')->with('status', 'Data Berhasil Ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailIndex($id)
    {
        $role = RoleUser::select('roles.name', 'roles_users.id as id','users.id as users')
            ->join('roles', 'roles.id', '=', 'roles_users.roles_id')
            ->join('users', 'users.id', '=', 'roles_users.users_id')
            ->where('users_id', $id)
            ->get();
        $roles = Role::where('status', 1)->get();
        return view('admin.users-admin.detail.detail-users', compact('role', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDetail(Request $request, $id)
    {

        $role = RoleUser::find($id);
        $role->roles_id = $request->role_id;
        $role->save();
        return redirect('/users-admin')->with('status', 'Data Berhasil Diubah!!!');
    }
    public function addDetail(Request $request)
    {
        // dd($request->all());
        RoleUser::create([
            'roles_id' => $request->roles_id,
            'users_id' => $request->users_id
        ]);
        return redirect('/users-admin')->with('status', 'Data Berhasil Ditambahkan!!!');
    }
    public function deleteDetail($id)
    {
        $role = RoleUser::find($id);
        $role->delete();
        return redirect('/users-admin')->with('status', 'Data Berhasil Dihapus!!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->get();
        if ($user[0]->email == $request->email) {
            $request->validate([
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|string|min:8|max:50',
                'password' => 'required|string|confirmed|min:8|max:32'
            ]);
        } else {
            $request->validate([
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|string|min:8|unique:users|max:50',
                'password' => 'required|string|confirmed|min:8|max:32'
            ]);
        }
        $user = User::where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'roles_id' => $request->role,
                'password' => $request->password,
                'status' => $request->status
            ]);
        return redirect('/users-admin')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)
            ->update([
                'status' => 0
            ]);
        return redirect('/users-admin')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
