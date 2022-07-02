<?php

namespace App\Http\Controllers;

use App\Models\DataKasbond;
use App\Models\MasterData;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KasbondKontroller extends Controller
{
    public function index()
    {
        $data_kasbond = DataKasbond::with('MasterData')->get();
        return view('index', compact('data_kasbond'));
    }

    public function tambah()
    {
        $master_data = MasterData::all();
        return view('tambah', compact('master_data'));
    }

    public function store(Request $request)
    {
        $coa = MasterData::whereId($request->coa)->first();

        $request->validate([
            'nominal' => 'required',
            'coa' => 'required',
            'keterangan' => 'required'

        ]);

        $data = new DataKasbond();
        $data->id_master_data = $coa->id;
        $data->nominal = $request->nominal;
        $data->keterangan_transaksi = $request->keterangan;
        $data->created_at = now();

        if ($data->save()) {
            return redirect()->back()->with('status', 'Data Berhasil Disimpan');
        } else {
            return redirect()->back()->with('status', 'Data Gagal Disimpan');
        }
    }

    public function edit($id)
    {
        $data_kasbond = DataKasbond::find($id);
        $master_data = MasterData::all();
        return view('edit', compact('data_kasbond', 'master_data'));
    }

    public function update(Request $request)
    {
        $data = DataKasbond::where('id', $request->id)->first();
        $coa = MasterData::whereId($request->coa)->first();
        $data->id_master_data = $coa->id;
        $data->nominal = $request->nominal;
        $data->keterangan_transaksi = $request->keterangan_transaksi;
        $data->created_at = now();

        if ($data->save()) {
            return redirect('/')->with('status', 'Data Berhasil Diperbarui');
        } else {
            return redirect('/')->back()->with('status', 'Data Gagal Diperbarui');
        }
    }


    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('data_kasbond')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }
}
