<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mycontroller extends Controller
{
    public function functionhw(){
        return view('helloworld');
    }

    public function functionhome(){
        return view('home');
    }

    public function tampilbarang(){
        $barang = DB::table('barang')->get();

        return view('tampilbarang',['barang'=>$barang]);
    }

    public function tambahbarang(Request $rq){
        $barang = DB::table('barang')->insert(
            [
                //nama kolom di tb/db => $rq->HTML Form
                'kode' => $rq->kode_barang,
                'nama' => $rq->nama_barang,
                'harga' => $rq->harga_barang
            ]
        );
        return redirect('/tampilbarang');
    }

    public function tampiledit($id){
        //select * from barang where id=id
        $barang = DB::table('barang')->where('id',$id)->get();
        return view('formedit',['hasil'=>$barang]);
    }


     public function editbarang(Request $rq){
        DB::table('barang')->where('id',$rq->id)->update(
            [
                'kode' => $rq->kode_barang,
                'nama' => $rq->nama_barang,
                'harga' => $rq->harga_barang
            ]
        );

        return redirect('/tampilbarang');
    }

    public function deletebarang($id){
        DB::table('barang')->where('id',$id)->delete();
        return redirect('/tampilbarang');
    }
}