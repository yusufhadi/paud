<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

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
                'id_role' => 'required',
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'ttl' => 'required',
                'nohp' => 'required'
            ]);

            $user = User::create([
                'id_role' => $request->id_role,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'ttl' => $request->ttl,
                'nohp' => $request->nohp
            ]);

            $data = User::where('id', '=', $user->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'succes', $data);
            } else {
                return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed bede');
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
        $data = user::where('id', '=', $id)->get();

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
                'id_role' => 'required',
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'ttl' => 'required',
                'nohp' => 'required'
            ]);

            $user = User::findOrFail($id);

            $user->update([
                'id_role' => $request->id_role,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'ttl' => $request->ttl,
                'nohp' => $request->nohp
            ]);

            $data = User::where('id', '=', $user->id)->get();

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
            $user = User::findOrFail($id);

            $data = $user->delete();

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
