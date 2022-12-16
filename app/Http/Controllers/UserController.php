<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sekolah;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('sekolah')->get();
        return view("user.list", compact('users'));
    }

    public function detail($id)
    {
        $role = [
            ['id'=>1, 'role'=>'Admin'],
            ['id'=>2, 'role'=>'User'],
            ['id'=>3, 'role'=>'Guest'],
        ];
        $user = User::query()->where("id", $id)->first();
        $sekolah = Sekolah::all();
        return view("user.detail", compact('user', 'role', 'sekolah'));
    }

    public function store()
    {
        $sekolah = Sekolah::all();
        return view("user.store", compact('sekolah'));
    }

    public function update(Request $request, $id)
    {
        $user = User::query()->where("id", $id)->first();
        $user->fill($request->all());
        $user->save();
        return redirect()->back()->with(['success' => 'Data berhasil di update!']);
        ;
    }

    public function create(Request $request)
    {
        $payload = [
            'nama' => $request->input("nama"),
            'email' => $request->input("email"),
            'password' => $request->input("password"),
            'id_sekolah' => $request->input("id_sekolah"),
            'role' => $request->input("role"),
        ];
        User::query()->create($payload);
        return redirect()->back()->with(['success' => 'Data berhasil di tambahkan!']);
    }

    public function destroy($id)
    {
        $user = User::query()->where("id", $id)->delete();
        return redirect()->back()->with(['success' => 'Data berhasil di hapus!']);
        ;
    }
}
