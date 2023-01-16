<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Storage;

class BookController extends Controller{
    public function awal()
    {
        return view ('login');
    }
    public function signin()
    {
        return view ('signin');
    }
    public function home()
    {
        return view ('home');
    }

    public function index()
    {
        $films = DB :: table('films')->get();
        return view('index',['films' => $films]);
    }

    public function cari($id)
    {
        $films = DB :: table('films')->where('Idfilm',$id)->get();
        return view('index',['films' => $films]);
    }
    public function tambah(Request $request){

        $request->file('file')->storeAs('public', $request->Idfilm);

        // insert data ke table films
        DB::table('films')->insert([
            'Idfilm' => $request->Idfilm,
            'JudulFilm' => $request->JudulFilm,
            'sutradara' => $request->sutradara,
            'Kategori' => $request->Kategori,
            'Sinopsis' => $request->Sinopsis,
            'Image' => $request->Idfilm,
            'video' => $request->video,
        ]);
        return redirect('/home');
    }
    public function hapus($id){
        $films=DB::table('films')->where('Idfilm',$id)->delete();
        return redirect('/home');
    }
    public function show($id){
        $film = DB :: table('films')->where('Idfilm',$id)->get();
        return view('update',['films' => $film]);
    }
    public function edit(Request $request){
        DB::table('films')->where('Idfilm',$request->Idfilm)->update([

            'JudulFilm' => $request->JudulFilm,
            'Sutradara' => $request->sutradara,
            'Kategori' => $request->Kategori,
            'Sinopsis' => $request->Sinopsis,
        ]);

        return redirect('/home');
    }
    public function registrasi(Request $request){

        $cryptpassword = Hash::make($request->password);

        // insert data ke table books
        $split = str_split($cryptpassword, 30);
        DB::table('user')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $split[0],
            'extend' => $split[1],
            'tanggal' => $request->tanggal,
            'kelamin' => $request->kelamin,
            'kategori' => $request->kategori,
            'status' => 'user'
        ]);
        return redirect('/')->with(['success' => 'User Name dan Password telah terdaftar, silahkan gunakan untuk sign in']);
    }
    public function login(Request $request){
        $user = $request->input('username');
        $password = $request->input('password');

        $datauser = DB::table('user')->where(['username' => $user])->first();
        if(count((array)$datauser)!=0){
            $combine = $datauser->password.$datauser->extend;
        }
        if($datauser->username == $user AND Hash::check($password,$combine)){
            $request->session()->put('username',$datauser->username);
            $request->session()->put('status', $datauser->status);
            return redirect('/home');
        }
        else{
            return redirect('/')->with(['error' => 'User Name dan Password tidak ditemukan']);
        }
    }
    public function logout(){
        session()->forget('username');
        session()->forget('status');
        return view('login');
    }
}
