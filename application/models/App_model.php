<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model{

  function proseslogin ($where)
  {
    $query=$this->db->where($where)->get('user');
    if($query->num_rows() >0)
      return $query->row();
    else return false;
  }

  function Update_user_data($id,$data)
  {
    $this->db->set($data);
    $this->db->where('id',$id);
    $this->db->update('user');

    if($this->db->affected_rows() >0)
      return true;
    else return false;

  }

}
