<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crew = Crew::all();
        return view('crew.index',compact('crew'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $pengaduan = Pengaduan::where('status','sudah di proses')->get();
        return view('crew.laporan',compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Crew::create($request->all());
        return redirect('crew');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function show(Crew $crew)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function edit(Crew $crew)
    {
        
        return view('crew.edit',compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crew $crew)
    {
        $crew->update($request->all());
        return redirect('crew');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crew::where('id',$id)->first();
        $data->delete();
        return redirect()->back();
    }
    public function cetak($id){
        $data = Pengaduan::where('id',$id)->first();
        return view('crew.cetak',compact('data'));
        // return $data;
    }
}
