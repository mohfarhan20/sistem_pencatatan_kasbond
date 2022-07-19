<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKasbond;
use App\Models\MasterData;
use Illuminate\Support\Facades\DB;

class KasbondKontroller extends Controller
{
    public function index(Request $request)
    {
        // <<<<<<< HEAD
        // $data_kasbond = DataKasbond::with('MasterData')->latest()->get();
        // =======

        $data_kasbond = DataKasbond::with('MasterData')->latest();
        if ($request->tanggal) {
            $data_kasbond = $data_kasbond->where('created_at', $request->tanggal);
        }
        if (request('search')) {
            $data_kasbond->where('keterangan_transaksi', 'like', '%' . request('search') . '%')
                ->orWhere('nominal', 'like', '%' . request('search') . '%');
        }
        $data_kasbond = $data_kasbond->paginate(10);

        // >>>>>>> 99cbdf6bd8971ccb9c018e882b32ffd5c4b8837b
        return view('index', compact('data_kasbond'));
    }

    public function download()
    {
        $data = DataKasbond::all();
        return view('download', compact('data_kasbond'));
    }


    public function tambah(Request $request)
    {
        // $data_kasbond = DataKasbond::find($request->tanggal);
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
        return redirect('/')->with('status', 'Data Berhasil Dihapus');
    }
}
