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
    public function functionkontak(){
        return view('kontak');
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
    public function functionlogin(){
        return view('Homelogin');
    }

    public function adminhome(){
        $testi = DB::table('tb_user')->get();
        return view('adminhome',['tb_user'=>$testi]);
    }

    public function admindata(){
        $testi = DB::table('tb_admin')->get();
        return view('admindata',['tb_admin'=>$testi]);
    }

    public function testimoni(Request $rq){
        $barang = DB::table('tb_user')->insert(
            [
                //nama kolom di tb/db => $rq->HTML Form
                'testimoni' => $rq->testimoni,
            ]
        );
        return redirect('/home');
    }
}