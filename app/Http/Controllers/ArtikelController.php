<?php 
namespace App\Http\Controllers;
use App\Models\Artikel;
class ArtikelController extends Controller{
	function index(){
		$data['list_artikel'] = Artikel::all();

		return view('artikel.index', $data);
	}
	function create(){
		return view('artikel.create');
	}
	function store(){
		$artikel = new Artikel;
		$artikel->judul = request ('judul');
		$artikel->kategori = request ('kategori');
		$artikel->tag = request ('tag');
		$artikel->tanggal = request ('tanggal');
		$artikel->isi = request ('isi');
		$artikel->save();
			
			return redirect('artikel')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.show', $data);
	}
	function edit(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.edit', $data);
	}
	function update(Artikel $artikel){
	
		$artikel->judul = request ('judul');
		$artikel->kategori = request ('kategori');
		$artikel->tag = request ('tag');
		$artikel->tanggal = request ('tanggal');
		$artikel->isi = request ('isi');
		$artikel->save();
			
		return redirect('artikel')->with('success','Data Berhasil Diedit');
	}
	function destroy(Artikel $artikel){
		$artikel->delete();

		return redirect('artikel')->with('danger','Data Berhasil Dihapus');

	}

	function filter()
    {
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        //$data['list_artikel'] = artikel::where('nama','like', "%$nama%")->get();
        //$data['list_artikel'] = artikel::whereIn('stok', $stok")->get();
        $data['list_artikel'] = Artikel::whereBetween('harga',[$harga_min,$harga_max])->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');
        return view('artikel.index', $data);
    }
}