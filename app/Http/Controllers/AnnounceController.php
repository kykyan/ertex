<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announce;
use File;
use Auth;

class AnnounceController extends Controller
{
    public function index()
    {
        $announces = Announce::all();
        return view('admin.announce.index', compact('announces'));

        // dd(Auth::user()->name);
    }

    public function create()
    {
        return view('admin.announce.create');
    }

    public function store(Request $request)
    {
        $announce = new Announce;
        $announce->author = Auth::user()->id;
        $announce->judul = $request->judul;
        $announce->isi = $request->isi;
        $announce->save();

        $path = public_path().'/filesdat/'.$announce->announce_id ;
        if (!file_exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $file = $request->file('gambar');
        $file->move($path,$file->getClientOriginalName());
        $update = array(
            "gambar" => '/'.$announce->announce_id.'/'.$file->getClientOriginalName()
        );
        Announce::where('announce_id',$announce->announce_id)->update($update);

        return redirect('/announcement')->with('status','Data Berhasil Ditambahkan!');
    }

    public function publish($id)
    {
        Announce::where('announce_id', $id)
        ->update([
            'publish' => 1,
        ]);
        return redirect('/announcement')->with('status','Pengumuman Berhasil Di Publish!');
    }
    
    public function hide($id)
    {
        Announce::where('announce_id', $id)
        ->update([
            'publish' => 0,
        ]);
        return redirect('/announcement')->with('status','Pengumuman Berhasil Di Sembunyikan!');
    }

    public function edit($announce)
    {
        $announce = Announce::where('announce_id',$announce)->first();
        return view('admin.announce.edit', compact('announce'));
    }

    public function update(Request $request, $id)
    {
        if(!empty($request->gambar)){
            $path = public_path().'/filesdat/'.$id ;
            if (!file_exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $file = $request->file('gambar');
            $file->move($path,$file->getClientOriginalName());
            $update = [
                'judul' => $request->judul,
                'isi' => $request->isi,
                "gambar" => '/'.$id.'/'.$file->getClientOriginalName()
            ];
        }else{
            $update = [
                'judul' => $request->judul,
                'isi' => $request->isi,
            ];
        }
        Announce::where('announce_id', $id)
        ->update($update);
        return redirect('/announcement')->with('status','Pengumuman Berhasil Diubah!');
    }

    public function destroy($id)
    {
        Announce::destroy($id);
        return redirect('/announcement')->with('hapus','Pengumuman Berhasil Dihapus!');
    }

    public function pengumuman()
    {
        $announces = Announce::where('publish', '1')->get();
        return view('user.pengumuman', compact('announces'));
    }

    public function show($announce)
    {
        $announces = Announce::where('announce_id', $announce)->first();
        return view('user.show', compact('announces'));
    }
}