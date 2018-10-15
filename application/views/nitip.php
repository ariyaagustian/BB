//controler
<?php
function insert()
{
  $data['judul'] = 'Insert Data User';
  $this->load->view('register', $data);
  $this->load->model('User_model');
}

function simpan_user()
{
      $this->load->model('User_model');
      $this->User_model->simpan_user();
      $data['notifikasi'] = 'Data berhasil disimpan';
      $data['judul']='Insert Data Berhasil';
      $this->load->view('notifikasi', $data);
      // if($this->session->userdata('level');)
      redirect('User_controller/tampil');
}

//model//function simpan_user()
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
  ?>
