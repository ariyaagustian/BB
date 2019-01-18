<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller{

  public function __construct()
  {
    parent ::__construct();
    $this->load->helper(array('form', 'url'));
  }

  function index()
  {
    $data['pilih']="Beranda";
    $this->load->view('templateuser/v_header',$data);
    $this->load->view('beranda');
    $this->load->view('templateuser/v_footer');
  }

  function simpaneditprofil()
  {
    $id_user     = $this->session->userdata('id_user');
    $nama        = $this->input->post('nama',true);
    $tempat_lahir= $this->input->post('tempat_lahir',true);
    $tgl_lahir   = $this->input->post('tgl_lahir',true);
    $alamat      = $this->input->post('alamat',true);
    $tlp         = $this->input->post('tlp',true);
    $email       = $this->input->post('email',true);
    $username    = $this->input->post('username',true);
    $password    = md5($this->input->post('password',true));

    $this->load->model('M_terapi');
    $simpanedit=$this->M_terapi->simpanedituser($id_user,$nama,$tempat_lahir,$tgl_lahir,$alamat,$tlp,$email,$username,$password);

    if(!$simpanedit){

      $this->session->set_flashdata('editprofilgagal','Gagal');
    } else {
      $this->session->set_flashdata('editprofilsukses','Sukses');
    }
    redirect('C_konten/jadwalterapi');

  }



}
