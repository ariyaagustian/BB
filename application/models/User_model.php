<?php
class User_model extends CI_Model{

  function validate($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('user');
    return $result;
  }

  function simpan_user()
    {
        $simpan_data=array(
            'level'         =>"user",
            'nama'          => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'nim'           =>$this->input->post('nim'),
            'email'         => $this->input->post('email'),
            'jurusan'       => $this->input->post('jurusan'),
            'tlp'           => $this->input->post('tlp')
       );
        $simpan = $this->db->insert('user', $simpan_data);
        return $simpan;
    }
    function get_user_all()
    {
        $query=$this->db->query("SELECT * FROM user ORDER BY id DESC");
        return $query->result();
    }

    function delete_user($id)
    {
        $query=$this->db->query("DELETE FROM user WHERE id='$id'");
    }

    function edit_user($id)
    {
        $q="SELECT * FROM  user WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
    }

    function simpan_edit_user( $nama,$level, $username, $password, $email, $nim,$jurusan,$tlp)
    {
        $data = array(
            'nama'           => $nama,
            'username'       => $username,
            'password'       => $password,
            'email'          => $email,
            'nim'            => $nim,
            'jurusan'        => $jurusan,
            'tlp'            => $tlp
        );
        $this->db->where('id', $this->session->userdata('id'));
        $this->db->update('user', $data);
    }
}
