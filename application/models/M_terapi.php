<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_terapi extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

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

  function simpanjadwalterapi($bulan='',$haritgl1='',$tahun='',$totaltanggal='',$tanggalmerah='')
  {
    $data=array(
                'bulan'=>$bulan,
                'haritgl1'=>$haritgl1,
                'tahun'=>$tahun,
                'totaltanggal'=>$totaltanggal,
                'tanggalmerah'=>$tanggalmerah  );
              $this->db->trans_start();
              $this->db->insert('kalender',$data);
              $this->db->trans_complete();
              redirect (base_url().'C_admin/datakalenderterapi/');
  }

  function ambildatauser()
  {
      $id_user=$this->session->userdata('id_user');
      $this->db->where('id_user',$id_user);
      $result = $this->db->get('user');
      return $result;
  }

  function ambildatasewa($id_user='')
  {

    $query=$this->db->query("select  * from sewa where id_user='$id_user' ORDER BY sewa.id_sewa DESC");
    return $query;
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

}
