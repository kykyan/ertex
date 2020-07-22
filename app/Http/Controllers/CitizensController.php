<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class CitizensController extends Controller
{
    public function index()
    {        
        $data['citizens'] = Citizen::all();
        $data['judul'] = "Data Warga";
        return view('admin.citizens.index', $data);
    }
    public function index1()
    {
        $data['citizens'] = DB::table('citizens')->where('ket', "Warga Asli")->get();
        $data['judul'] = "Warga Asli";
        return view('admin.citizens.index', $data);
    }
    public function index2()
    {
        $data['citizens'] = DB::table('citizens')->where('ket', "Warga Luar")->get();
        $data['judul'] = "Warga Luar";
        return view('admin.citizens.index', $data);
    }
    public function index3()
    {
        $data['citizens'] = DB::table('citizens')->where('ket', 'Warga Pendatang')->get();
        $data['judul'] = "Warga Pendatang";
        return view('admin.citizens.index', $data);
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
 
    	$citizens = DB::table('citizens')
		->where('nama','like',"%".$cari."%")->paginate();
 
    	return view('admin.citizens.index',['citizens' => $citizens]);
	}

    public function create()
    {
        return view('admin.citizens.create');
    }

    public function store(Request $request)
    {
        $citizen = new Citizen;
        $citizen->nokk = $request->nokk;
        $citizen->nama = strtoupper($request->nama);
        $citizen->nik = $request->nik;
        $citizen->jkel = $request->jkel;
        $citizen->tmptlhr = strtoupper($request->tmptlhr);
        $citizen->tgllhr = $request->tgllhr;
        $citizen->agama = $request->agama;
        $citizen->pendidikan = $request->pendidikan;
        $citizen->pekerjaan = ucwords($request->pekerjaan);
        $citizen->status = $request->status;
        $citizen->hubkel = $request->hubkel;
        $citizen->kwrgngran = $request->kwrgngran;
        $citizen->ket = $request->ket;

        $cek = Citizen::where('nik', $request->nik)->first();
        if(!empty($cek)){
            return back()->with('alert','NIK Sudah Terdaftar!');
        } else {
            $citizen->save();
            return redirect('/warga')->with('status','Data Berhasil Ditambahkan!');
        }
    }

    public function show(Citizen $citizen)
    {
        return view('admin.citizens.show', compact('citizen'));
    }

    public function edit(Citizen $citizen)
    {
        return view('admin.citizens.edit', compact('citizen'));
    }

    public function update(Request $request, $id)
    {
        Citizen::where('id', $id)
            ->update([
                'nokk' => $request->nokk,
                'nama' => ucwords($request->nama),
                'nik' => $request->nik,
                'jkel' => $request->jkel,
                'tmptlhr' => ucwords($request->tmptlhr),
                'tgllhr' => $request->tgllhr,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => ucwords($request->pekerjaan),
                'status' => $request->status,
                'hubkel' => $request->hubkel,
                'kwrgngran' => $request->kwrgngran,
                'ket' => $request->ket
            ]);
            return redirect('/warga')->with('status','Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        try {
            Citizen::destroy($id);
            return redirect('/warga')->with('status','Data Berhasil Dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/warga')->with('error','Data tidak dapat dihapus, Silahkan hapus terlebih dahulu data pada menu pelayanan!');
        }    

    }
}
