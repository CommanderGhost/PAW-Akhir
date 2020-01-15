<?php

class Data_wisata extends CI_Controller
{

    public function index()
    {
        $data['wisata'] = $this->model_wisata->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_wisata', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_wst   = $this->input->post('nama_wisata');
        $alamat     = $this->input->post('alamat_wisata');
        $lokasi     = $this->input->post('lokasi_wisata');
        $biyaya     = $this->input->post('biaya_wisata');
        $gambar_wisata = $_FILES['gambar_wisata']['name'];
        if ($gambar_wisata = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar_wisata')) {
                echo "Gambar gagal di upload";
            } else {
                $gambar_wisata = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_wisata'   => $nama_wst,
            'alamat_wisata' => $alamat,
            'lokasi_wisata' => $lokasi,
            'biaya_wisata' => $biyaya,
            'gambar_wisata'        => $gambar_wisata

        );

        $this->model_wisata->tambah_wisata($data, 'tb_wisata');

        redirect('admin/data_wisata/index');
    }

    public function edit($id_wisata)
    {
        $where = array('id_wisata' => $id_wisata);
        $data['wisata'] = $this->model_wisata->edit_wisata($where, 'tb_wisata')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_wisata', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $id_wisata      = $this->input->post('id_wisata');
        $nama_wisata    = $this->input->post('nama_wisata');
        $alamat_wisata  = $this->input->post('alamat_wisata');
        $lokasi_wisata  = $this->input->post('lokasi_wisata');
        $biaya_wisata   = $this->input->post('biaya_wisata');

        $data = array(
            'nama_wisata'   => $nama_wisata,
            'alamat_wisata' => $alamat_wisata,
            'lokasi_wisata' => $lokasi_wisata,
            'biaya_wisata'  => $biaya_wisata
        );

        $where = array(
            'id_wisata' => $id_wisata
        );

        $this->model_wisata->update_data($where, $data, 'tb_wisata');
        redirect('admin/data_wisata/index');
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus($id)
    {
        $where = array('id_wisata' => $id);
        $this->model_wisata->hapus_data($where, 'tb_wisata');
        redirect('admin/data_wisata/index');
    }
}
