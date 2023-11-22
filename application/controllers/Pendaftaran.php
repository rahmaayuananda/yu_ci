<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
    }
    public function index()
    {
        $data['judul2']= "Halaman Pendaftaran";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->Pendaftaran_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("Pendaftaran/vw_pendaftaran", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul']="Halaman Tambah Pendaftaran";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->Pendaftaran_model->get();
        $this->form_validation->set_rules('nama','Nama','required',[
            'required'=> 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('email','Email','required',[
            'required'=> 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('prodi','Prodi','required',[
            'required'=> 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('angkatan','Angkatan','required|integer',[
            'required'=> 'Angkatan Wajib di isi',
            'integer'=>'Angkatan harus angka'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Pendaftaran/vw_tambah_pendaftaran", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data=[
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'prodi' => $this->input->post('prodi'),
                'angkatan' => $this->input->post('angkatan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            $ext = pathinfo($upload_image, PATHINFO_EXTENSION);
            if ($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']='2048';
                $config['upload_path'] = './assets/img/prodi/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')){
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Pendaftaran_model->insert($data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Data pendaftaran Berhasil Ditambah!</div>');
            redirect('Pendaftaran');
        }
    }
    public function hapus($id)
    {
        $this->Pendaftaran_model->delete($id);
        $error = $this->db->error();
        if($error['code']!=0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
            fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
        } else{
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
            class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
        }
        redirect('Pendaftaran');
    }
    public function edit($id)
    {
        $data['judul']="Halaman Edit Pendaftaran";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->Pendaftaran_model->get();
        $data['pendaftaran'] = $this->Pendaftaran_model->getById($id);
        $this->form_validation->set_rules('nama','Nama','required',[
            'required'=> 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('email','Email','required',[
            'required'=> 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('prodi','Prodi','required',[
            'required'=> 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('angkatan','Angkatan','required|integer',[
            'required'=> 'Angkatan Wajib di isi',
            'integer'=>'Angkatan harus angka'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Pendaftaran/vw_tambah_pendaftaran", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data=[
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'prodi' => $this->input->post('prodi'),
                'angkatan' => $this->input->post('angkatan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']='2048';
                $config['upload_path'] = './assets/img/prodi/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')){
                    $old_image = $data['prodi']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/prodi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Pendaftaran_model->update(['id' => $id], $data, $upload_image);
            $this->Pendaftaran_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Data Pendaftaran Berhasil Diubah!</div>');
            redirect('Pendaftaran');
        }
    }
}