<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function index()
    {
        $sekolah = Sekolah::query()->get();
        return view("sekolah.list", compact('sekolah'));
    }

    public function detail($id)
    {
        $sekolah = Sekolah::query()->where("id", $id)->first();
        return view("sekolah.detail", compact('sekolah'));
    }

    public function store()
    {
        return view("sekolah.store");
    }

    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::query()->where("id", $id)->first();
        $sekolah->fill($request->all());
        $sekolah->save();
        return redirect()->back()->with(['success' => 'Data berhasil di update!']);
    }

    public function create(Request $request)
    {
        $payload = [
            'nama_sekolah' => $request->input("nama_sekolah"),
            'email_sekolah' => $request->input("email_sekolah"),
            'alamat_sekolah' => $request->input("alamat_sekolah")
        ];
        Sekolah::query()->create($payload);
        return redirect()->back()->with(['success' => 'Data berhasil di tambahkan!']);
    }

    public function destroy($id)
    {
        $sekolah = Sekolah::query()->where("id", $id)->delete();
        return redirect()->back()->with(['success' => 'Data berhasil di hapus!']);
    }
}
