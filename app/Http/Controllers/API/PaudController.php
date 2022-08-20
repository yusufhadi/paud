<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\paud;
use Exception;
use Illuminate\Http\Request;

class PaudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = paud::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'succes', $data);
        } else {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_user' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'kode_pos' => 'required',
                'no_tlp' => 'required',
                'jmlh_anak' => 'required',
                'jmlh_pengajar' => 'required',
                'lat' => 'required',
                'leng' => 'required',
                'usia_anak' => 'required',
                'usia_pengajar' => 'required',
                'status_pengajar' => 'required',
                'waktu_pelaksanaan' => 'required',
                'fasilitas_paud' => 'required',
                'metode_pembelajaran' => 'required',
                'biaya' => 'required',
                'transportasi' => 'required',
                'gambar' => 'required',
                'paud_desc' => 'required',
            ]);

            $paud = paud::create([
                'id_user' => $request->id_user,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'kode_pos' => $request->kode_pos,
                'no_tlp' => $request->no_tlp,
                'jmlh_anak' => $request->jmlh_anak,
                'jmlh_pengajar' => $request->jmlh_pengajar,
                'lat' => $request->lat,
                'leng' => $request->leng,
                'usia_anak' => $request->usia_anak,
                'usia_pengajar' => $request->usia_pengajar,
                'status_pengajar' => $request->status_pengajar,
                'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
                'fasilitas_paud' => $request->fasilitas_paud,
                'metode_pembelajaran' => $request->metode_pembelajaran,
                'biaya' => $request->biaya,
                'transportasi' => $request->transportasi,
                'gambar' => $request->gambar,
                'paud_desc' => $request->paud_desc
            ]);

            $data = paud::where('id', '=', $paud->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'succes', $data);
            } else {
                return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = paud::where('id', '=', $id)->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'succes', $data);
        } else {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try {
            $request->validate([
                'id_user' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'kode_pos' => 'required',
                'no_tlp' => 'required',
                'jmlh_anak' => 'required',
                'jmlh_pengajar' => 'required',
                'lat' => 'required',
                'leng' => 'required',
                'usia_anak' => 'required',
                'usia_pengajar' => 'required',
                'status_pengajar' => 'required',
                'waktu_pelaksanaan' => 'required',
                'fasilitas_paud' => 'required',
                'metode_pembelajaran' => 'required',
                'biaya' => 'required',
                'transportasi' => 'required',
                'gambar' => 'required',
                'paud_desc' => 'required',
            ]);

            $paud = paud::findOrFail($id);

            $paud->update([
                'id_user' => $request->id_user,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'kode_pos' => $request->kode_pos,
                'no_tlp' => $request->no_tlp,
                'jmlh_anak' => $request->jmlh_anak,
                'jmlh_pengajar' => $request->jmlh_pengajar,
                'lat' => $request->lat,
                'leng' => $request->leng,
                'usia_anak' => $request->usia_anak,
                'usia_pengajar' => $request->usia_pengajar,
                'status_pengajar' => $request->status_pengajar,
                'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
                'fasilitas_paud' => $request->fasilitas_paud,
                'metode_pembelajaran' => $request->metode_pembelajaran,
                'biaya' => $request->biaya,
                'transportasi' => $request->transportasi,
                'gambar' => $request->gambar,
                'paud_desc' => $request->paud_desc
            ]);

            $data = paud::where('id', '=', $paud->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'succes', $data);
            } else {
                return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $paud = paud::findOrFail($id);

            $data = $paud->delete();

            if ($data) {
                return ApiFormatter::createApi(200, 'succes', $data);
            } else {
                return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed');
        }
    }
}
