<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class minumanController extends Controller
{
    public function index()
    { $minuman = DB::table('minuman')->paginate(5);
        return view('minuman.index', ['minuman' => $minuman]);
    }
    public function cari(Request $request)
    { $cari = $request->cari;
      $minuman = DB::table('minuman')
      ->where('merkminuman','like',"%" .$cari . "%")
      ->paginate(3);
      return view('minuman.index', ['minuman' => $minuman]);
    }

    public function add()
    {
        return view('minuman.tambah');
    }
    public function store(Request $request)
    {
        DB::table('minuman')->insert([
            'kodeminuman' => $request->kode,
            'merkminuman' => $request->merk,
            'stockminuman' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/minuman');
    }
    public function edit($kodeminuman)
    {
    $minuman = DB::table('minuman')->where('kodeminuman',$kodeminuman)->get();
    return view('minuman.edit', ['minuman'=> $minuman]);
}
    public function detail($id)
    {
        $minuman = DB::table('minuman')->where('kodeminuman',$id)->get();
        return view('minuman.detail', ['minuman' => $minuman]);
    }

    public function update(Request $request)
    {
    DB::table('minuman')->where('kodeminuman',$request->kodeminuman)->update([
        'kodeminuman' => $request->kode,
        'merkminuman' => $request->merk,
        'stockminuman' => $request->stock,
        'tersedia' => $request->tersedia
    ]);
    return redirect('/minuman');
}
    public function hapus($kodeminuman)
    {
        DB::table('minuman')->where('kodeminuman',$kodeminuman)->delete();
        return redirect('/minuman');
    }
}

