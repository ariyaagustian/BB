<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_konten extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }

  function jadwalterapi()
  {
    $this->load->model('M_terapi');
    $data['daftar_user'] = $this->M_terapi->ambildatauser();
    $data['pilih']='jadwalterapi';
    $this->load->view('templateuser/v_headeruser',$data);
    $this->load->view('konten/jadwalterapi');
    $this->load->view('templateuser/v_footer');
  }

  function beranda()
  {
    $data['pilih']='Beranda';
    $this->load->view('templateuser/v_header',$data);
    $this->load->view('konten/jadwalterapi');
    $this->load->view('templateuser/v_footer');
  }

  function riwayatterapi()
  {
    $this->load->model('M_terapi');
    $data['daftar_sewa'] = $this->M_terapi->ambildatasewa();
    $data['pilih']='riwayatterapi';
    $this->load->view('templateuser/v_headeruser',$data);
    $this->load->view('konten/riwayatterapi');
    $this->load->view('templateuser/v_footer');
  }
  function logout(){
    $this->session->sess_destroy();
    redirect('C_auth/index');
    }

  function hapusbooking()
  {
    $id_sewa= $this->input->post('id_sewa',true);
    $this->load->model('M_terapi');
    $data['daftar_sewa'] = $this->M_terapi->hapusbooking($id_sewa);
  }

}
