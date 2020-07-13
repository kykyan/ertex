<?php

namespace App\Http\Controllers;

use Session;
use App\Service;
use App\Citizen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\UserEmail;
use App\Mail\AdminEmail;
use App\Mail\SuccessEmail;
use Illuminate\Support\Facades\Mail;
use PDF;

class ServicesController extends Controller
{
    public function pelayanan()
    {
        return view('user.pelayanan');
    }

    public function index(){
        if(Session::get('warga')){
            return redirect('/pelayanan');
        }else{
            return view('user.login');
        }
    }
    
    public function login(Request $request){
        $user = Citizen::where('nik', $request->nik)->first();
        if(!empty($user)){
            Session::put('nik',$user->nik);
            Session::put('warga',TRUE);
            return redirect('/pelayanan');
	    } else{
           	return redirect('/loginservice')->with('alert','NIK Tidak Terdaftar!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $service = new Service;
        $service->jenis = $request->jenis;
        $service->nik = $request->nik;
        $service->alamat = $request->alamat;
        $service->email = $request->email;
        $service->keterangan = $request->keterangan;

        $user = Citizen::where('nik', $request->nik)->first();
        if(!empty($user)){
            $service->save();
            Mail::to($request->email)->send(new UserEmail());
            Mail::to('ertexrw07cawang@gmail.com')->send(new AdminEmail());
            return redirect('/pelayanan')->with('sukses','Permintaan Anda Sukses Ditambahkan!');
        } else{
            return redirect('/pelayanan')->with('alert','NIK Tidak Terdaftar! Silahkan Hubungi Pihak RT!');
        }

        try {
            Citizen::destroy($id);
            return redirect('/warga')->with('status','Data Berhasil Dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/warga')->with('error','Data tidak dapat dihapus, Silahkan hapus terlebih dahulu data pada menu pelayanan!');
        }

    }

    public function permintaan()
    {
        $services = DB::table('services')
            ->join('citizens', 'citizens.nik', '=', 'services.nik')
            ->where('statussurat', 0)->get();
        // $services = Service::paginate(10);
        return view('admin.services.index', compact('services'));
    }
    
    public function arsip()
    {
        $services = DB::table('services')
            ->join('citizens', 'citizens.nik', '=', 'services.nik')
            ->where('statussurat', "1")->get();
        return view('admin.services.index', compact('services'));
    }

    // UDAH BISA COKKK!!!!!!!!!!!!!!!!
    public function show($id)
    {
        // $pel = Service::find($id);
        $services = DB::table('services')
            ->join('citizens', 'citizens.nik', '=', 'services.nik')
            ->where('services.pel_id','=', $id)
            ->select('citizens.*', 'services.*')
            ->get();
        return view('admin.services.show', compact('services'));
    }

    public function edit($id)
    {
        $pel = Service::find($id);
        $data['services'] = DB::table('services')
            ->join('citizens', 'citizens.nik', '=', 'services.nik')
            ->where('services.pel_id','=', $id)
            ->select('citizens.*', 'services.*')
            ->first();

        if($data['services']->jenis == 'Surat Pernyataan')
        {
            $data['keterangan'] = "Dengan ini menyatakan bahwa (Keterangan)";
        } else if($data['services']->jenis == 'Surat Keterangan')
        {
            $data['keterangan'] = "Masukkan keterangan pada kolom yang tertera";
        } else if($data['services']->jenis == 'Surat Domisili')
        {
            $data['keterangan'] = "Benar Nama tersebut bertempat tinggal/berdomisili diwilayah kami dengan status (Keterangan) 
            adapun surat keterangan domisili ini berlaku 1 bulan sejak tanggal  dikeluarkan.";
        }
        // dd($data['services']->pel_id);
        // $pel = Service::find($id);
        // $services = DB::table('services')
        // ->join('citizens', 'citizens.nik', '=', 'services.nik')
        // ->where('services.pel_id','=', $id)
        // ->select('citizens.*', 'services.*')
        // ->get();
        return view('admin.services.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        Service::where('pel_id', $id)
        ->update([
            'teks' => $request->teks
            ]);
            return redirect('/permintaan')->with('status','Teks Berhasil Dimasukkan');
    }
        
    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('/permintaan')->with('hapus','Data Berhasil Dihapus!');
    }
        
    public function cetak_pdf($id)
    {
        $pel = Service::find($id);
        $services = DB::table('services')
            ->join('citizens', 'citizens.nik', '=', 'services.nik')
            ->where('services.pel_id','=', $id)
            ->select('citizens.*', 'services.*')
            ->first();

        // dd($services);
        
        if($services->jenis == 'Surat Pernyataan')
        {
            $pdf = PDF::loadview('surat.pernyataan',['services'=>$services])
            ->setPaper('a4', 'potrait');
            $namaPdf = $services->nama.".pdf";
        } else if($services->jenis == 'Surat Keterangan')
        {
            $pdf = PDF::loadview('surat.keterangan',['services'=>$services])
            ->setPaper('a4', 'potrait');
            $namaPdf = $services->nama.".pdf";
        } else if($services->jenis == 'Surat Domisili')
        {
            $pdf = PDF::loadview('surat.domisili',['services'=>$services])
            ->setPaper('a4', 'potrait');
            $namaPdf = $services->nama.".pdf";
        }
        return $pdf->download($namaPdf);
    }

    public function suratselesai($id)
    {
        $services = Service::find($id);
        Mail::to($services->email)->send(new SuccessEmail());
        Service::where('pel_id', $id)
        ->update([
            'statussurat' => 1,
        ]);
        return redirect('/permintaan');
    }
}
