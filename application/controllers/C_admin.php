<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function datakalenderterapi()
  {

  }

  function simpanjadwalterapi()
  {
    $this->load->model('M_terapi');
    $bulan       =$this->input->post('bulan',true);
    $haritgl1    =$this->input->post('haritgl1',true);
    $tahun       =$this->input->post('tahun',true);
    $tanggalmerah=$this->input->post('tanggalmerah',true);

    if($bulan=="Januari"){
      $totaltanggal=31;
    } else if($bulan=="Februari"){
      $totaltanggal=30;
    } else if($bulan=="Maret"){
      $totaltanggal=31;
    } else if($bulan=="April"){
      $totaltanggal=30;
    } else if($bulan=="Mei"){
      $totaltanggal=31;
    } else if($bulan=="Juni"){
      $totaltanggal=30;
    } else if($bulan=="Juli"){
      $totaltanggal=31;
    } else if($bulan=="Agustus"){
      $totaltanggal=31;
    } else if($bulan=="September"){
      $totaltanggal=30;
    } else if($bulan=="Oktober"){
      $totaltanggal=31;
    } else if($bulan=="November"){
      $totaltanggal=30;
    } else if($bulan=="Desember"){
      $totaltanggal=31;
    }

    $this->M_terapi->simpanjadwalterapi($bulan,$haritgl1,$tahun,$totaltanggal,$tanggalmerah);
  }

  function datauser()
  {
    $this->load->model('User_model');
    $data['daftar_thread'] = $this->User_model->get_thread_all();
    $data['daftar_timeline'] = $this->User_model->get_timeline_all();
    if($this->session->userdata('level') == 1){
          $this->load->view('templateadmin/v_header');
          $this->load->view('templateadmin/v_sidebar');
          $this->load->view('admin/timeline_list', $data);
          $this->load->view('templateadmin/v_footer');
  }

}
