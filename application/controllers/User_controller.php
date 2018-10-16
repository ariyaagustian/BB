<?php
class User_controller extends CI_Controller{

    function __Construct()
    {
        parent ::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('User_model');
    }

    //LOGIN
    function index()
    {
        $this->load->view('login');
    }

    function auth(){
        $username    = $this->input->post('username');
        $password    = md5($this->input->post('password'));

        $validate = $this->User_model->validate($username,$password);
        if($validate->num_rows() >0 ) {
            $data      = $validate->row_array();
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
                $this->load->view('template/v_header');
                $this->load->view('template/v_sidebar');
                $this->load->view('user/Dashboard');
                $this->load->view('template/v_footer');
            } else  {
                $this->load->view('admin/Dashboard');
            }
          }
    }

//DASHBOARD PERTAMA KALI
    function dash(){
      if($this->session->userdata('level')== 1){
          $this->load->view('admin/Dashboard');
      } else
          $this->load->view('template/v_header');
          $this->load->view('template/v_sidebar');
          $this->load->view('user/Dashboard');
          $this->load->view('template/v_footer');
    }

//REGISTRASI USER BARU
    function insert(){
          $data['judul'] = 'Insert Data User';
          $this->load->view('register', $data);
          $this->load->model('User_model');
    }

    function simpan_user() {
          $this->load->model('User_model');
          $this->User_model->simpan_user();
          $data['notifikasi'] = 'Data berhasil disimpan';
          $data['judul']='Insert Data Berhasil';
          $this->load->view('notifikasi', $data);
          // if($this->session->userdata('level');)
          redirect('User_controller/tampil');
    }

//MENAMPILKAN DATA UNTUK ADMIN
    function tampil() {
          $this->load->model('User_model');
          $data['judul'] = 'Menampilkan Data dari Database Menggunakan Codeigniter';
          $data['daftar_user'] = $this->User_model->get_user_all();
          if($this->session->userdata('level') == 1){
              $this->load->view('template/v_header');
              $this->load->view('template/v_sidebar');
              $this->load->view('admin/user_list', $data);
              $this->load->view('template/v_footer');
          }else{
        //echo $this->session->userdata('id');
              $this->load->view('template/v_header');
              $this->load->view('template/v_sidebar');
              $this->load->view('user/profil',$data);
              $this->load->view('template/v_footer');
          }
    }

//HAPUS DATA UNTUK ADMIN
    function hapus(){
          $this->load->model('User_model');
          $data['judul'] = 'Delete Record Menggunakan Codeigniter';
          $data['daftar_user'] = $this->User_model->get_user_all();
          $this->load->view('template/v_header');
          $this->load->view('template/v_sidebar');
          $this->load->view('admin/daftar_user', $data);
          $this->load->view('template/v_footer');
    }

//HAPUS DATA BERDASAR ID
    function delete_user($id) {
          $this->load->model('User_model');
          $username = $this->User_model->delete_user($id);
          redirect('User_controller/hapus');
    }

//EDIT BIODATA USER
    function edit_user() {
          $this->load->model('User_model');
          $data['judul'] = 'Menampilkan Data dari Database Menggunakan Codeigniter';
          $data['daftar_user'] = $this->User_model->get_user_all();
          if($this->session->userdata('level') == 2 ){
            $this->load->view('template/v_header');
            $this->load->view('template/v_sidebar');
            $this->load->view('user/editprofil',$data);
            $this->load->view('template/v_footer');
            }
    }

//MENYIMPAN EDITAN FORM BIODATA USER
    function simpan_edit_user($id) {
            $id=$this->session->userdata('id');
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

//MELOAD 6 MACAM THREAD
    function thread($id_thread=''){
            $id_thread=$this->uri->segment(3);
            if(!isset($id_thread)){
                $id_thread=1;
            } else {
                $id_thread=$id_thread;  }
            $this->load->model('User_model');
            $data['id_thread']=$id_thread;
            $data['thread']=$this->User_model->thread();
            $data['id_thread']=$id_thread;
            $data['forumDisplayFill']=$this->User_model->getForumFill($id_thread);

            $this->load->view('template/v_header');
            $this->load->view('template/v_sidebar');
            $this->load->view('timeline/Dashboard',$data);
            $this->load->view('template/v_footer');
    }

//MENAMBAH POST/TIMELINE BARU
    function tambahtimeline($id_thread=''){
            $data['id']=$id_thread;
            $data['thread']=$this->User_model->thread();
            $info=$this->User_model->getProp($id_thread);
            if(!empty($info->namaforum)){
                $data['namaforum']=$info->namaforum; }
                $this->load->view('template/v_header');
                $this->load->view('template/v_sidebar');
                $this->load->view('timeline/addpost',$data);
                $this->load->view('template/v_footer');
    }

    //MENYIMPAN TIMELINE BARU
        function simpantimeline(){
                $this->load->model('User_model');
                $id_thread=$this->input->post('id_thread');
                $judul=$this->input->post('judul');
                $isi=$this->input->post('isi');
          		  $type=$this->input->post('type');
          		  $matkul=$this->input->post('matkul');
          		  $datementor=$this->input->post('datementor');
          		  $deadline=$this->input->post('deadline');
          		  $feemin=$this->input->post('feemin');
          		  $feemax=$this->input->post('feemax');

                $this->User_model->saveThread();
                $data['notifikasi'] = 'Data berhasil disimpan';
                $data['judul']='Insert Timeline Berhasil';
                $this->load->view('notifikasi', $data);
                //redirect('User_controller/tampiltimeline');
        }

//MELOAD DETAIL SUATU POST
    function detailthread($id_timeline='')  {
            $id_thread=$this->uri->segment(3);
            $data['id_thread']=$id_thread;
            $id_timeline=$this->uri->segment(4);
            $data['id_timeline']=$id_timeline;
            $data['forumDisplayFill']=$this->User_model->getDetailForum($id_timeline);
            $data['forumDisplayFillComment']=$this->User_model->getFcontentComment($id_timeline);
            $data['thread']=$this->User_model->thread();
            $this->load->view('template/v_header');
            $this->load->view('template/v_sidebar');
            $this->load->view('timeline/detail',$data);
            $this->load->view('template/v_footer');
    }

//MENAMBAH KOMEN DI SUATU POST
    function reqComment($id_thread='',$id_timeline=''){
            $this->load->model('User_model');
            $id_thread=$this->uri->segment(3);
            $data['id_thread']=$id_thread;
            $id_timeline=$this->uri->segment(4);
            $data['id_timeline']=$id_timeline;
            $data['thread']=$this->User_model->thread();
            $info=$this->User_model->getProp($id_timeline);
            if(!empty($info->judul)){
            $data['judul']=$info->judul;}

            $this->load->view('template/v_header');
            $this->load->view('timeline/addkomen',$data);
            $this->load->view('template/v_footer');
    }

//MENYIMPAN KOMEN DI SUATU POST
    function saveComment(){
            $this->load->model('User_model');
            $id_timeline=$this->input->post('id_timeline');
            $isi=$this->input->post('isi');
            if($isi==''){
                  $data['flashdata']="ISI KOMENTAR TIDAK BOLEH KOSONG";
                  $data['id_timeline']=$id_timeline;
                  $data['thread']=$this->forummodel->thread();
                  $info=$this->User_model->getProp($id_timeline);
                  $data['judul']=$info->judul;
                  $data['id_timeline']=$info->idtimeline;
                  $this->load->view('template/v_header');
                  $this->load->view('timeline/addkomen',$data);
                  $this->load->view('template/v_footer');

            } else {
                  $this->load->model('User_model');
                  $this->User_model->saveComment($id_thread,$id_timeline);
            }
    }

    //FUNTION LOGOUT USER
        function logout(){
                $this->session->sess_destroy();
                redirect('User_controller');
          }
}
