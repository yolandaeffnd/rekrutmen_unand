<?php

namespace App\Http\Controllers\ManageUser;

use App\Http\Controllers\Controller;
use App\Models\{Faculty,Major,StudyProgram,User,SubDivision, Unit};
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //menggunakan route resource maka nama function harus index , show dll
    public function index(Request $request)
    {
        // $level = z_dekripsi($request->get('level'));
        // $users = User::where('level', $level)->paginate(3);

        $user = Auth::user();

        if ($user->isDeveloper()) {
            $users = User::paginate(5);
        } else {
            $users = User::whereNotIn('level', ['developer','pelamar'])->paginate(5);
        }



        return view('manage.users.user', compact('users'));
    }

    public function show($id)
    {
        $user = Auth::user();

        if ($user->isDeveloper()) {
            $user = User::findOrFail($id);
        } else {
            $user = User::whereNotIn('level', ['developer'])->where('id', $id)->firstOrFail();
        }



        return view('manage.users.user-detail', compact('user'));
    }

    public function create()
    {
        $roles           = Role::pluck('name', 'id')->all();
        $units       = Unit::pluck('name', 'id')->all();


        return view('manage.users.user-create', compact('roles', 'units'));
    }

    public function store(Request $request)
    {
        // dd($request); die();
        $request->validate([
            'username'  => 'required|string|max:99|unique:users',
            'level'     => 'required|string|max:99',
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            // 'password'  => 'required|string|min:8|confirmed',
            'id_unit'        => '',
            'roles'      => '',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->level = $request->level;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->username);
        $user->id_unit = $request->id_unit;
        // $user->id_sub_division = $request->id_sub_division;
        // $user->id_major = $request->id_major;
        // $user->id_study_program = $request->id_study_program;
        $user->assignRole($request->roles);
        $user->save();
        // dd($user->roles->pluck('pivot')[1]->model_id);
        return redirect(route('user.index'))->with('success', 'Tambah Data Berhasil');
        // return redirect('manage/user?level=' . z_enkripsi($request->level))->with('success', 'Tambah Data Berhasil');
    }

    public function edit($id)
    {
        $user = Auth::user();

        if ($user->isDeveloper()) {
            $user = User::findOrFail($id);
        } else {
            $user = User::whereNotIn('level', ['developer'])->where('id', $id)->firstOrFail();
        }


        $roles              = Role::pluck('name', 'id')->all();
        $units          = Unit::pluck('name', 'id')->all();

        $userRole           = $user->roles->pluck('name', 'id')->all();

        // dd($user);
        return view('manage.users.user-edit', compact('user', 'roles', 'units'));
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
        $user = Auth::user();

        if ($user->isDeveloper()) {
            $user = User::findOrFail($id);
        } else {
            $user = User::whereNotIn('level', ['developer'])->where('id', $id)->firstOrFail();
        }

        $user = User::findOrfail($id);
        $this->validate($request, [
            'username'  => '',
            'level'     => 'required|string|max:99',
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'id_unit'        => '',
            // 'id_sub_division'   => '',
            // 'id_major'          => '',
            // 'id_study_program'  => '',
            'password'          => '',
            'roles'             => '',
        ]);

        $input = $request->all();
        $input = Arr::except($input, array('username'));
        if ($request->has('password')) {
            $input['password'] = Hash::make($user->username);
        } else {
            $input = Arr::except($input, array('password'));
        }
        if ($request->has('id_unit') === '') {
            $_POST['value'] = null; // or 'NULL' for SQL
        }

        $user->update($input);
        // DB::table('model_has_roles')->where('model_id',$id)->delete();
        // $user->assignRole($request->input('roles'));
        $user->syncRoles($request->input('roles'));
        // dd($user);
        return redirect(route('user.index'))->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->isDeveloper()) {
            User::find($id)->delete();
        } else {
            User::whereNotIn('level', ['developer'])->where('id', $id)->firstOrFail()->delete();
        }

        // dd($request->level);

        return redirect(route('user.index'))->with('info', 'Data Sudah Berhasil Dihapus');
    }
}
