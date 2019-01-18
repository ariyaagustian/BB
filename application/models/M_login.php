<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

  function validate($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('user');
    return $result;
   //  if ($result->num_rows() > 0) {
   //   foreach ($result->result() as $data) {
   //     $mdata[]=$data;
   //   }
   //   return $mdata;
   // }
    }

    //MENYIMPAN REGISTER USER BARU
  // function simpan_user(){
  //       $simpan_data = array(
  //           'hak_akses'     => 2,
  //           'nama'          => $this->input->post('nama'),
  //           'username'      => $this->input->post('username'),
  //           'password'      => md5($this->input-> post('password')),
  //           'tempat_lahir'  => $this->input->post('tempat_lahir'),
  //           'alamat'        => $this->input->post('alamat'),
  //           'tlp'           => $this->input->post('tlp'),
  //           'email'         => $this->input->post('email')
  //           'tgl_lahir'     => $this->input->post('tgl_lahir') );
  //       $simpan = $this->db->insert('user', $simpan_data);
  //       return $simpan;
  //   }
}
