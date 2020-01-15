<?php

class dashboard extends CI_Controller
{

    public function index()
    {
        // exit(print_r($this->session->userdata()));
        $data['wisata'] = $this->model_wisata->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_pesanan($id_wisata)
    {
        $wisata = $this->model_wisata->find($id_wisata);
        $data = array(
            'id'       => $wisata->id_wisata,
            'qty'             => '1',
            'name'     => $wisata->nama_wisata,
            'option'   => $wisata->lokasi_wisata,
            'price'    => $wisata->biaya_wisata
        );
        // exit(print_r($data));
        $this->cart->insert($data);
        redirect('dashboard');
    }
    public function list_pesanan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan');
        $this->load->view('templates/footer');
    }

    public function hapus_pesanan()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }
    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal Proses";
        }
    }
}
