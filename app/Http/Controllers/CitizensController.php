<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$citizens = DB::table('citizens')
		->where('nama','like',"%".$cari."%")->paginate();
 
    		// mengirim data pegawai ke view index
		return view('admin.citizens.index',['citizens' => $citizens]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.citizens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        // $this->validate($request, [
        //     'nokk' => 'size:16',
        //     'nik' => 'size:16',
        // ]);

        $cek = Citizen::where('nik', $request->nik)->first();
        if(!empty($cek)){
            return back()->with('alert','NIK Sudah Terdaftar!');
        } else {
            $citizen->save();
            return redirect('/warga')->with('status','Data Berhasil Ditambahkan!');
        }

        // $citizen->save();

        // Citizen::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Citizen $citizen)
    {
        return view('admin.citizens.show', compact('citizen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Citizen $citizen)
    {
        return view('admin.citizens.edit', compact('citizen'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Citizen::destroy($id);
        // return redirect('/warga')->with('status','Data Berhasil Dihapus!');
        try {
            Citizen::destroy($id);
            return redirect('/warga')->with('status','Data Berhasil Dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/warga')->with('error','Data tidak dapat dihapus, Silahkan hapus terlebih dahulu data pada menu pelayanan!');
        }    

    }
}
