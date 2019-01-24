<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper(array('html','form','url','text','string'));
    $this->load->model('M_terapi');

  }

  function index()
  {
    $data['pilih']="Beranda";
    $this->load->view('templateuser/v_header',$data);
    $this->load->view('beranda');
    $this->load->view('templateuser/v_footer');
  }

  function auth(){
        $username    = $this->input->post('username');
        $password    = md5($this->input->post('password'));

        $validate = $this->M_terapi->validate($username,$password);
        if($validate->num_rows() > 0 ) {
            $data      = $validate->row_array();
            $nama      = $data['nama'];
            $username  = $data['username'];
            $hak_akses = $data['hak_akses'];
            $sesdata   = array(
                'id_user'   => $data['id_user'],
                'username'  => $data['username'],
                'nama'      => $data['nama'],
                'hak_akses' => $hak_akses,
                'logged_in' => TRUE );
            $this->session->set_userdata($sesdata);
          }
          if($this->session->userdata('hak_akses')==2){
            $this->load->model('M_terapi');
            $data['daftar_user'] = $this->M_terapi->ambildatauser();
            $data['pilih']="jadwalterapi";
            $this->load->view('templateuser/v_headeruser',$data);
            $this->load->view('konten/jadwalterapi');
            $this->load->view('templateuser/v_footer');
          } else if($this->session->userdata('hak_akses')==1){
            $this->load->model('M_terapi');
            $data['data_user'] = $this->M_terapi->getdatauser();
            $this->load->view('templateadmin/v_header');
            $this->load->view('templateadmin/v_sidebar');
            $this->load->view('admin/data_user',$data);
            $this->load->view('templateadmin/v_footer');
          } else {
            $this->session->set_flashdata('logingagal','Salah');
            redirect('C_auth/index');
          }
    }

    function register()
    {
      $this->load->view('templateuser/v_header');
      $this->load->view('register');
      $this->load->view('templateuser/v_footer');
    }

    function simpan_register()
    {

      $a=random_string('md5');
      $this->load->model('M_terapi');
      $simpan_register=$this->M_terapi->simpan_register($a);
        if($simpan_register){
          $this->session->set_flashdata('registersukses','Sukses');
        } else {
          $this->session->set_flashdata('registergagal','Gagal');
        }
      redirect('C_auth/index');
    }

    function logout()
    {
      $this->session->sess_destroy();
      redirect('C_auth/index');
    }

   //  //REGISTRASI USER BARU
   //  function insert(){
   //        $this->load->view('register');
   //        $this->load->model('M_login');
   //  }
   // //SIMPAN DATA REGISTRASI BARU
   //  function simpan_user() {
   //        $this->load->model('M_login');
   //        $this->M_login->simpan_user();
   //        // if($this->session->userdata('level');)
   //        redirect('C_user/index');
   //  }
}
