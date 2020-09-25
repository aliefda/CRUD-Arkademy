<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class ProdukController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$produk = DB::table('produk')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['produk' => $produk]);
 
    }

    public function tambah()
    {
         return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('produk')->insert([
		'namaProduk' => $request->nama,
		'keterangan' => $request->keterangan,
		'harga' => $request->harga,
		'jumlah' => $request->jumlah
	]);

    return redirect('/produk');
    }

    public function edit($id)
    {
        $produk = DB::table('produk')->where('id',$id)->get();
        return view('edit',['produk' => $produk]);
    }

    public function update(Request $request)
    {

        DB::table('produk')->where('id',$request->id)->update([
            'namaProduk' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/produk');
    }

    public function hapus($id)
    {

        DB::table('produk')->where('id',$id)->delete();
            
        return redirect('/produk');
    }

}