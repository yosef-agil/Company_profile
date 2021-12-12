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
        return view('login');
    }

    public function tambahdata(){
        return view('admintambah');
    }

    public function formedit($id){
        $edit = DB::table('tb_admin')->where('id',$id)->get();
        return view('adminedit',['hasil'=>$edit]);
    }

    public function cek(Request $rq){       
        $username = $rq->input('nama');
        $password = $rq->input('password'); 
        echo $username.$password;
        $check =  DB::table('tb_admin')->where(['nama'=>$username,'password'=>$password])->get();
        if (count($check) > 0 ) {
            return redirect('/admindata');
        }
        return redirect('/login');
    }

    public function adminhome(){
        $testi = DB::table('tb_user')->get();
        return view('adminhome',['tb_user'=>$testi]);
    }

    public function admindata(){
        $testi = DB::table('tb_admin')->get();
        return view('admindata',['tb_admin'=>$testi]);
    }

    public function pesan(Request $rq){
        $testi = DB::table('tb_user')->insert(
            [
                'nama' => $rq->nama,
                'email' => $rq->email,
                'alamat' => $rq->alamat,
                'pesan' => $rq->pesan,
            ]
        );
        return redirect('/kontak');
    }

    public function prosestambah(Request $rq){
        $testi = DB::table('tb_admin')->insert(
            [
                'id' => $rq->id,
                'nama' => $rq->nama,
                'password' => $rq->password
            ]
        );
        return redirect('/admindata');
    }

    public function editdata(Request $rq){
        DB::table('tb_admin')->where('id',$rq->id)->update(
            [
                'id' => $rq->id,
                'nama' => $rq->nama,
                'password' => $rq->password
            ]
        );
        return redirect('/admindata');
    }

    public function delete($id){
        DB::table('tb_user')->where('id', $id)->delete();
        return redirect('/admin');
 }

 public function deleteadmin($id){
    DB::table('tb_admin')->where('id', $id)->delete();
    return redirect('/admindata');
}
}