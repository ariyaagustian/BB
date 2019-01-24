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
  function dashboard()
  {
    $this->load->view('templateadmin/v_header');
    $this->load->view('templateadmin/v_sidebar');
    $this->load->view('admin/dashboard');
    $this->load->view('templateadmin/v_footer');
  }

  function simpandatakalender()
  {
    $this->load->model('M_terapi');
    $savekalender=$this->M_terapi->simpandatakalender();
    if($savekalender){
      $this->session->set_flashdata('tambahkalendersukses','Sukses');
    } else {
        $this->session->set_flashdata('tambahkalendergagal','Gagal');
    }
    redirect('C_admin/datauser');
  }

  function savekalender_admin()
  {
    $this->load->model('M_terapi');
    $bulan       =$this->input->post('bulan',true);
    $haritgl1    =$this->input->post('haritgl1',true);
    $tahun       =$this->input->post('tahun',true);

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

    $simpankalender=$this->M_terapi->simpanjadwalterapi($bulan,$haritgl1,$tahun,$totaltanggal);
    if($simpankalender){
      $this->session->set_flashdata('tambahkalendersukses','Sukses');
    } else {
        $this->session->set_flashdata('tambahkalendergagal','Gagal');
    }
    redirect('C_admin/datakalender');
  }

  function ambildata_tgllibur()
  {

  }
  function simpan_tglmerah()
  {

  }

  function datauser()
  {
    $this->load->model('M_terapi');
    $data['data_user'] = $this->M_terapi->getdatauser();
          $this->load->view('templateadmin/v_header');
          $this->load->view('templateadmin/v_sidebar');
          $this->load->view('admin/data_user', $data);
          $this->load->view('templateadmin/v_footer');

}

function saveedituser_admin()
  {
          $this->load->model('M_terapi');

          $id_user=$this->input->post('id_user',true);
          $nama=$this->input->post('nama',TRUE);
          $tempat_lahir=$this->input->post('tempat_lahir',TRUE);
          $tgl_lahir=$this->input->post('tgl_lahir',TRUE);
          $alamat=$this->input->post('alamat',true);
          $tlp=$this->input->post('tlp',true);
          $email= $this->input->post('email',true);
          $username= $this->input->post('username',true);
          $password=md5($this->input-> post('password',true));

          $saveuser_admin=$this->M_terapi->saveedituser_admin($id_user,$nama,$tempat_lahir,$tgl_lahir,$alamat,$tlp,$email,$username,$password);

          if($saveuser_admin){
            $this->session->set_flashdata('editusersukses','Sukses');
          } else {
              $this->session->set_flashdata('editusergagal','Gagal');
          }
          redirect('C_admin/datauser');
    }

    function saveedit_kalender()
      {
              $this->load->model('M_terapi');
              $id_kalender=$this->input->post('id_kalender',true);
              $bulan=$this->input->post('bulan',TRUE);
              $haritgl1=$this->input->post('haritgl1',TRUE);
              $tahun=$this->input->post('tahun',TRUE);

              $saveedit_admin=$this->M_terapi->saveeditkalender_admin($id_kalender,$bulan,$haritgl1,$tahun);

              if(!$saveedit_admin){
                $this->session->set_flashdata('editkalendergagal','Gagal');
              } else {
                  $this->session->set_flashdata('editkalendersukses','Sukses');
              }
              redirect('C_admin/datakalender');
        }

        function saveedit_tglmerah()
          {
                  $this->load->model('M_terapi');
                  $id_tgl=$this->input->post('id_tgl',true);
                  $id_kalender=$this->input->post('id_kalender',true);
                  $tgl_libur=$this->input->post('tgl_libur',TRUE);
                  $keterangan=$this->input->post('keterangan',TRUE);

                  $saveedit_admin=$this->M_terapi->saveedit_tglmerah($id_kalender,$tgl_libur,$keterangan,$id_tgl);

                  if(!$saveedit_admin){
                    $this->session->set_flashdata('edittglgagal','Gagal');
                  } else {
                      $this->session->set_flashdata('edittglsukses','Sukses');
                  }
                  redirect('C_admin/datakalender');
            }

    function hapus_user()
        {
            $id_user=$this->uri->segment(3);

            $this->load->model('M_terapi');
            $this->M_terapi->hapus_user($id_user);
        }

        function hapus_tgl()
            {
                $id_tgl=$this->uri->segment(3);

                $this->load->model('M_terapi');
                $this->M_terapi->hapus_tgl($id_tgl);
            }

        function hapus_kalender()
            {
                $id_kalender=$this->uri->segment(3);

                $this->load->model('M_terapi');
                $this->M_terapi->hapus_kalender($id_kalender);
            }

    function saveuser_admin()
    {
        $a=random_string('md5');
        $saveuser_admin=$this->M_terapi->simpan_register($a);

            if($saveuser_admin){
              $this->session->set_flashdata('tambahusersukses','Sukses');
            } else {
                $this->session->set_flashdata('tambahusergagal','Gagal');
            }
            redirect (base_url().'C_admin/datauser');
      }

      function savetglmerah()
      {
          $this->load->model('M_terapi');
          $savetgl_admin=$this->M_terapi->savetglmerah();

          if(!$savetgl_admin){
            $this->session->set_flashdata('savetglgagal','Gagal');
          } else {
              $this->session->set_flashdata('savetglsukses','Sukses');
          }
          redirect('C_admin/datakalender');
        }


      function datasewa()
      {
        $this->load->model('M_terapi');
        $data['data_sewa'] = $this->M_terapi->getdatasewa();
              $this->load->view('templateadmin/v_header');
              $this->load->view('templateadmin/v_sidebar');
              $this->load->view('admin/data_user', $data);
              $this->load->view('templateadmin/v_footer');

    }

    function datakalender()
    {
      $this->load->model('M_terapi');
      $data['data_kalender'] = $this->M_terapi->getdatakalender();
      $this->load->model('M_terapi');
      $data['data_tgl_merah']=$this->M_terapi->ambildata_tgllibur();
            $this->load->view('templateadmin/v_header');
            $this->load->view('templateadmin/v_sidebar');
            $this->load->view('admin/data_kalender', $data);
            $this->load->view('templateadmin/v_footer');

  }


}
