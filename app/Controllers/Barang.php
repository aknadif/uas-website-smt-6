<?php 

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $data =  [
            'nama_barang' => 'Daftar Barang',
            'barang' => $this->barangModel->getBarang()
        ];
        
        return view('barang/index', $data);
    }

    public function detail($id)
    {
        $data =  [
            'nama_barang' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($id)
        ];
        if(empty($data['barang'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Barang '.$id.' Tidak di Temukan');
        }
        return view('barang/detail', $data);
    }

    public function create()
    {
        $data=[
            'nama_barang' => 'Form Tambah Data Barang'
        ];
        return view('barang/create', $data);
    }

    public function save()
    {
       $this->barangModel->save([
           'nama_barang' => $this->request->getVar('nama_barang'),
           'harga_jual' => $this->request->getVar('harga_jual'),
           'jumlah' => $this->request->getVar('jumlah'),
       ]);

       session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

       return redirect()->to(base_url('/PHP/UTS-Semester-6/public/barang/')); 
    }
}