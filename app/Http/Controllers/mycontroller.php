<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mycontroller extends Controller
{

    public function functionhome(){
        return view('home');
    }
    public function functionartikel(){
        return view('artikel');
    }
    public function functiontujuan(){
        return view('tujuan');
    }
    public function functiontentang(){
        return view('tentang');
    }
    //produk
    public function functionproduk(){
        return view('produk');
    }
    public function functionproduk1(){
        return view('produk1');
    }
    public function functionproduk2(){
        return view('produk2');
    }
    public function functionproduk3(){
        return view('produk3');
    }
    public function functionproduk4(){
        return view('produk4');
    }
    public function functionproduk5(){
        return view('produk5');
    }
    public function functionproduk6(){
        return view('produk6');
    }
    public function functionproduk7(){
        return view('produk7');
    }
    public function functionproduk8(){
        return view('produk8');
    }
    public function functionproduk9(){
        return view('produk9');
    }
    public function functionproduk10(){
        return view('produk10');
    }
    public function functionproduk11(){
        return view('produk11');
    }
    public function functionproduk12(){
        return view('produk12');
    }
    public function functionproduk13(){
        return view('produk13');
    }
    //faq
    public function functionfaq(){
        return view('faq');
    }
    public function functionfaqminuman(){
        return view('faqminuman');
    }
    public function functionfaqkomposisi(){
        return view('faqkomposisi');
    }
    public function functionfaqkesehatan(){
        return view('faqkesehatan');
    }
    public function functionfaqsejarah(){
        return view('faqsejarah');
    }
    public function functionfaqisu(){
        return view('faqisu');
    }
    public function functionfaqhubungi(){
        return view('faqhubungi');
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