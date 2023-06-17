<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class SampahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $data = (new BaseApi)->index('/api/sampah/', ['search_kepala_keluarga' => $search]);
        $sampah = $data->json();
        return view('index')->with('sampah', $sampah['data']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

            // if ( $request->total_karung_sampah > 3) {
            //     $kriteria = "collapse";
            // }else {
            //     $kriteria = "standar";
            // }

        $data = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'kriteria' => $request->kriteria,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,

        ];

        $proses = (new BaseApi)->store('/api/sampah/tambah-data', $data);
        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/')->with('success', 'Berhasil menambahkan data baru ke Pembuangan Sampah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        // dd($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = (new BaseApi)->edit('/api/sampah/'.$id);
        if ($data->failed()) {
            $errors = $data->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            $sampah = $data->json('data');
            return view('edit')->with(['sampah' => $sampah]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $payload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
        ];
        $proses = (new BaseApi)->update('/api/sampah/update/'.$id, $payload);
        if ($proses->failed()) {
            // kalau gagal, balikin lagi sama pesan errors dari json nya
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            // berhasil, balikin ke halaman paling awal dengan pesan
            return redirect('/')->with('success', 'Berhasil mengubah data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proses = (new BaseApi)->delete('/api/sampah/delete/'.$id);

        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/')->with('success', 'Berhasil hapus data sementara');
        }
    }

    public function trash(){
        $proses = (new BaseApi)->trash('/api/sampah/show/trash/');
        if ($proses->failed()) {
            $errors = $proses->json ('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            $sampahTrash = $proses->json('data');
            return view('trash')->with(['sampahTrash' => $sampahTrash]);
        }
    }

    public function permanent($id)
    {
        $proses = (new BaseApi)->permanent('/api/sampah/trash/delete/permanent/'.$id);
        if ($proses->failed()) {
            $errors = $proses->json ('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect()->back()->with('Success', 'Berhasil menghapus data secara permanent');
        }
    }

    public function restore($id)
    {
        $proses = (new BaseApi)->restore('/api/sampah/trash/restore/'.$id); 
        if ($proses->failed()){
            $errors = $proses->json('data');
            return redirect('/')->with (['errors' => $errors]);
        }else{
            return redirect('/')->with ('success','berhasil mengembalikan data dari sampah');
    }
}

}