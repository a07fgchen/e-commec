<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Admin/User', [
            'users' => User::all()
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('Admin/Edit', [
            'user' => User::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)->update($request->all());

        return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('admin.user.index');
    }
}
