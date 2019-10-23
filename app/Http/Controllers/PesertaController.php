<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peserta;
use Validator;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = peserta::all();
        return view('peserta.index',['peserta'=>$peserta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return view('peserta.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // $data = new peserta();
        // $data->nama = $req->nama;
        // $data->mail = $req->email;
        // $data->phone = $req->phone;
        // $data->save();
        // 

        // Peserta::create([
        //     'nama' => $req->nama,
        //     'mail' => $req->email,
        //     'phone' => $req->phone,
        // ]);
        $req->validate([
            'nama'=> 'required',
            'email'=> 'required',
            'phone'=> 'required|min:9',

        ]);


        Peserta::create($req->all());

        return redirect('peserta')->with('status', 'Success Add Data!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $id)
    {
        return view('peserta.detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $id)
    {
        return view('peserta.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,Peserta $id)
    {
         $req->validate([
            'nama'=> 'required',
            'email'=> 'required',
            'phone'=> 'required|min:9',

        ]);
         
        Peserta::where('id', $id->id)
                 ->update([
                    'nama' => $req->nama,
                    'email' => $req->email,
                    'phone' => $req->phone
                 ]);   

        return redirect('peserta')->with('status', 'Success Update Data!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $id)
    {
        Peserta::destroy($id->id);
        return redirect('peserta')->with('status', 'Success Delete Data!');       
    }
}
