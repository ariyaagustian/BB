<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_terapi extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

// -----------------------------------USER
  function validate($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('user');
    return $result;
  }

  function simpan_register($a='')
  {
    $simpan_data = array(
            'hak_akses'     => 2,
            'id_user'       => $a,
            'nama'          => $this->input->post('nama',TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir',TRUE),
            'tgl_lahir'     => $this->input->post('tgl_lahir',TRUE),
            'gender'        => $this->input->post('gender',TRUE),
            'alamat'        => $this->input->post('alamat',TRUE),
            'tlp'           => $this->input->post('tlp',True),
            'email'         => $this->input->post('email',true),
            'username'      => $this->input->post('username',true),
            'password'      => md5($this->input-> post('password',true))   );

        $simpan = $this->db->insert('user', $simpan_data);
        return $simpan;
  }

  function simpanedituser($id_user,$nama,$tempat_lahir,$tgl_lahir,$alamat,$tlp,$email,$username,$password)
  {
    $data = array(
              'id_user'      =>$id_user,
              'nama'         =>$nama,
              'tempat_lahir' =>$tempat_lahir,
              'tgl_lahir'    =>$tgl_lahir,
              'alamat'       =>$alamat,
              'tlp'          =>$tlp,
              'email'        =>$email,
              'username'     =>$username,
              'password'     =>$password );
          $this->db->where('id_user', $id_user);
          $this->db->update('user', $data);

      if(!$data){
          $this->session->set_flashdata('editprofilgagal','Gagal');
      } else {
          $this->session->set_flashdata('editprofilsukses','Sukses');
      }
        redirect('C_konten/jadwalterapi');
  }

  function getdatauser()
  {
    $result = $this->db->get('user');
    return $result->result();
  }

  function saveedituser_admin($id_user='',$nama='',$tempat_lahir='',$tgl_lahir='',$alamat='',$tlp='',$email='',$username='',$password='')
  {
      $simpan_data = array(
          'id_user'       => $id_user,
          'nama'          => $nama,
          'tempat_lahir'  => $tempat_lahir,
          'tgl_lahir'     => $tgl_lahir,
          'alamat'        => $alamat,
          'tlp'           => $tlp,
          'email'         => $email,
          'username'      => $username,
          'password'      => $password );
      $this->db->where('id_user',$id_user);
      $simpan = $this->db->update('user', $simpan_data);
      return $simpan;
  }

  function hapus_user($id_user='')
  {
    $query=$this->db->delete('user',array('id_user'=>$id_user));
    if($query){
      $this->session->set_flashdata('hapususersukses','Sukses');
    } else {
        $this->session->set_flashdata('hapususergagal','Gagal');
    }
    redirect('C_admin/datauser');
  }


//-----------------------------------KALENDER
function getdatakalender()
{
  $result = $this->db->get('kalender');
  return $result->result();
}

  function simpanjadwalterapi($bulan,$haritgl1,$tahun,$totaltanggal)
  {
    $simpan_data = array(
            'bulan'        => $bulan,
            'haritgl1'     => $haritgl1,
            'tahun'        =>  $tahun,
            'totaltanggal' => $totaltanggal
          );
    $simpan = $this->db->insert('kalender', $simpan_data);
  }

  function hapus_kalender($id_kalender='')
  {
    $query=$this->db->delete('kalender',array('id_kalender'=>$id_kalender));
    if(!$query){
      $this->session->set_flashdata('hapuskalendergagal','Gagal');
    } else {
        $this->session->set_flashdata('hapuskalendersukses','Sukses');
    }
    redirect('C_admin/datakalender');
  }

  function saveeditkalender_admin($id_kalender,$bulan,$haritgl1,$tahun)
  {
      $simpan_data = array(
          'id_kalender'    => $id_kalender,
          'bulan'          => $bulan,
          'haritgl1'       => $haritgl1,
          'tahun'          => $tahun
           );
      $this->db->where('id_kalender',$id_kalender);
      $simpan = $this->db->update('kalender', $simpan_data);
      return $simpan;
  }




//----------------------------------TANGGALMERAH
  function ambildata_tgllibur()
  {
    $query=$this->db->query("SELECT * FROM tgl_libur JOIN kalender where tgl_libur.id_kalender=kalender.id_kalender");
    return $query->result();
  }

  function savetglmerah()
  {
    $simpan_data = array(
            'id_kalender'   => $this->input->post('id_kalender',TRUE),
            'tgl_libur'  => $this->input->post('tgl_libur',TRUE),
            'keterangan'     => $this->input->post('keterangan',TRUE)
            );

        $simpan = $this->db->insert('tgl_libur', $simpan_data);
        return $simpan;
  }

  function hapus_tgl($id_tgl='')
  {
    $query=$this->db->delete('tgl_libur',array('id_tgl'=>$id_tgl));
    if(!$query){
      $this->session->set_flashdata('hapustglgagal','Gagal');
    } else {
        $this->session->set_flashdata('hapustglsukses','Sukses');
    }
    redirect('C_admin/datakalender');
  }


  function saveedit_tglmerah($id_kalender='',$tgl_libur='',$keterangan='',$id_tgl='')
  {
    $simpan_data = array(
        'id_kalender'    => $id_kalender,
        'tgl_libur'      => $tgl_libur,
        'keterangan'     => $keterangan
         );
    $this->db->where('id_tgl',$id_tgl);
    $simpan = $this->db->update('tgl_libur', $simpan_data);
    return $simpan;
}


  //----------------------------------------SEWA
  function getdatasewa()
  {
    $result = $this->db->get('sewa');
    return $result->result();
  }






  //==================================USER PUNYA==========================

//-----------------------------Sewa
function ambildatasewa($id_user='')
{

  $query=$this->db->query("SELECT * from sewa where id_user='$id_user' ORDER BY sewa.id_sewa DESC");
  return $query;
}

function hapusbooking($id_sewa='')
{
    $query=$this->db->delete('sewa',array('id_sewa'=>$id_sewa));
    if(!$query){
        $this->session->set_flashdata('hapusbookgagal','Gagal');
    } else {
        $this->session->set_flashdata('hapusbooksukses','Sukses');
    }
      redirect('C_konten/riwayatterapi');
}



//----------------------------Profil
function ambildatauser()
{
    $id_user=$this->session->userdata('id_user');
    $this->db->where('id_user',$id_user);
    $result = $this->db->get('user');
    return $result;
}













  // function simpanjadwalterapi($bulan='',$haritgl1='',$tahun='',$totaltanggal='')
  // {
  //   $data = array(
  //             'bulan'        =>$bulan,
  //             'haritgl1'     =>$haritgl1,
  //             'tahun'        =>$tahun,
  //             'totaltanggal' =>$totaltanggal
  //              );
  //         $this->db->where('id_kalender', $id_kalender);
  //         $this->db->update('kalender', $data);
  //
  //         if($saveedit_admin){
  //           $this->session->set_flashdata('editkalendersukses','Sukses');
  //         } else {
  //             $this->session->set_flashdata('editeditgagal','Gagal');
  //         }
  //         redirect('C_admin/datakalender');
  // }




  }
