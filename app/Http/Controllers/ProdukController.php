<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    public function receipt($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.receipt', compact('produk'));
    }

    public function create()
    {
        //
        return view('produk.create');
    }
    //... 
    public function store(Request $request)
    {
    // Validasi data
        $request->validate([
            'nama' => 'required|max:45',
            'jenis' => 'required|max:45',
            'berat' => 'required|numeric',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'jenis.required' => 'Jenis wajib diisi',
            'jenis.max' => 'Jenis maksimal 45 karakter',
        ]);

        // Daftar harga per jenis layanan
        $hargaPerJenis = [
            'Express' => 10000,
            'Regular' => 7000,
            'Premium' => 15000,
            'Bed Cover & Selimut' => 20000,
            'Sepatu' => 25000,
        ];

        // Hitung harga total
        $harga = $request->berat * ($hargaPerJenis[$request->jenis] ?? 0);

        // Tambah data produk
        DB::table('produks')->insert([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'berat' => $request->berat,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'harga' => $harga, // Simpan harga total
        ]);

        return redirect()->route('index.index')->with('success', 'Pesanan berhasil ditambahkan!');
    }


    public function edit(Produk $id)
    {
        //
        return view('produk.edit', compact('id'));
    }
    public function update(Request $request, string $id)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|max:45',
            'jenis' => 'required|max:45',
            'berat' => 'required|numeric',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'jenis.required' => 'Jenis wajib diisi',
            'jenis.max' => 'Jenis maksimal 45 karakter',
        ]);

        // Daftar harga per jenis layanan
        $hargaPerJenis = [
            'Express' => 12000,
            'Regular' => 7000,
            'Premium' => 15000,
            'Bed Cover & Selimut' => 20000,
            'Sepatu' => 25000,
        ];

        // Hitung harga total
        $harga = $request->berat * ($hargaPerJenis[$request->jenis] ?? 0);

        // Update data produk
        DB::table('produks')->where('id', $id)->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'berat' => $request->berat,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'harga' => $harga, // Simpan harga total
        ]);

        return redirect()->route('index.index')->with('success', 'Pesanan berhasil diperbarui!');
    }


    public function destroy(Produk $id)
    {
    $id->delete();
    
    return redirect()->route('index.index')
            ->with('success','Data berhasil di hapus' );
    }
}