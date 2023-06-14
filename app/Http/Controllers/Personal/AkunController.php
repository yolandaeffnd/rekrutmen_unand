<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editPassword(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('put')) {


            if (!(Hash::check($request->get('password-lama'),  $user->password))) {
                // The passwords matches
                return redirect()->back()->with("error", "Your current password does not matches with the old password.");
            }

            if (strcmp($request->get('password-lama'), $request->get('password-baru')) == 0) {
                // Current password and new password same
                return redirect()->back()->with("error", "New Password cannot be same as your current password.");
            }

            $this->validate($request, [
                'password-lama' => 'required',
                'password-baru' => 'required|string|min:8|confirmed',
            ]);

            //Change Password
            $user->password = bcrypt($request->get('password-baru'));
            $user->save();

            return redirect()->back()->with("success", "Password successfully changed!");


        } else {
            return view('personal.akun.edit-password', compact('user'));
        }
    }
}
