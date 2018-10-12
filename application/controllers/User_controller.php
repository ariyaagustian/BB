<?php
class User_controller extends CI_Controller{

    function __Construct()
    {
        parent ::__construct();
        $this->load->model('User_model');
    }
    function index()
    {
      $this->load->view('login');
    }

    function auth(){
    $username    = $this->input->post('username');
    $password    = md5($this->input->post('password'));

    $validate = $this->User_model->validate($username,$password);
    if($validate->num_rows() > 0){
      $data  = $validate->row_array();
      $username  = $data['username'];
      $level     = $data['level'];
      $sesdata = array(
          'id'        => $data['id'],
          'username'  => $data['username'],
          'password'  => $password,
          'level'     => $level,
          'logged_in' => TRUE );
        $this->session->set_userdata($sesdata);       //access login for user
        if($level === '2'){
          $this->load->view('user/Dashboard');
        }
        else  $this->load->view('admin/Dashboard');
      }
    }

    function dash()
    {
      if($this->session->userdata('level')=='1'){
        $this->load->view('admin/Dashboard');
      }
      else
        $this->load->view('user/Dashboard');
    }
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

    function tampil()
    {
      $this->load->model('User_model');
      $data['judul'] = 'Menampilkan Data dari Database Menggunakan Codeigniter';
      $data['daftar_user'] = $this->User_model->get_user_all();
      if($this->session->userdata('level') == 1 ){
        $this->load->view('admin/daftar_user', $data);}
      else{
        $this->load->view('user/editprofil', $data);
        }
      }

    function hapus()
    {
        $this->load->model('User_model');
        $data['judul'] = 'Delete Record Menggunakan Codeigniter';
        $data['daftar_user'] = $this->User_model->get_user_all();
        $this->load->view('admin/daftar_user', $data);
    }
    function delete_user($id)
    {
        $this->load->model('User_model');
        $username = $this->User_model->delete_user($id);
        redirect('User_controller/hapus');
    }

    function edit_user($id)
    {
        $this->load->model('User_model');
        $data['edit']=$this->User_model->edit_user($id);
        $this->load->view('profil/editprofil', $data);
    }

    function simpan_edit_user($id)
    {
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $nim= $this->input->post('nim');
        $jurusan= $this->input->post('jurusan');
        $tlp= $this->input->post('tlp');

        $data['judul'] = 'Update Data Codeigniter';
        $this->load->model('User_model');
        $data['edit'] = $this->User_model->simpan_edit_user( $nama,$level, $username, $password, $email, $nim,$jurusan,$tlp);
        $data['notifikasi'] = 'Data telah berhasil disimpan';
        $this->load->view('notifikasi', $data);
        redirect('User_controller/tampil');
    }

    function logout(){
          $this->session->sess_destroy();
          redirect('User_controller');
      }

    }
