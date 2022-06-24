<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pengaduan = Pengaduan::orderBy('id', 'desc')
        ->get();
        // $pengaduan = DB::table('pengaduan')
        //         ->orderBy('status', 'desc')
        //         ->get();
        // $pengaduan = Pengaduan::where('status','proses')->get();
        return view('pengaduan.index',compact('pengaduan'));
        // return $pengaduan;  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            $request->foto->move(public_path('post-images'),$imgName);
        }
        Pengaduan::create([
            'nama_pelapor'=>$request['nama_pelapor'],
            'tgl_pengaduan'=>$request['tgl_pengaduan'],
            'nik'=>$request['nik'],
            'isi_laporan'=>$request['isi_laporan'],
            'foto'=>$imgName,
            'status'=>$request['status'],
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengaduan::where('id',$id);
        $data->update([
            'status'=>'sudah di proses']);
            return redirect()->back();
    }
    public function verifikasi($id)
    {
        $data = Pengaduan::where('id',$id);
        $data->update([
            'status'=>'proses']);
            return redirect()->back();
    }
}
