<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('App_model');
  }

	function ceklogin(){
			$where=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);

			$result=$this->App_model->proseslogin($where);
			if($result>0 AND is_object($result)){
				$data_session=array(
					'id'			=>$result->id,
					'nama'		=>$result->nama,
					'username'=>$where['username'],
					'password'=>$where['password'],
					'level'		=>$result->level,
					'nim'			=>$result->nim,
					'jurusan'	=>$result->jurusan,
					'email'		=>$result->email,
					'tlp'			=>$result->tlp,
					'status' 	=>'login');
					$this->session->set_userdata($data_session);
				return redirect('Welcome/editprofil');
			}else{
				redirect('Welcome/index');
			$this->db->close();}
}

	function editprofil()
	{
		$this->load->view('header');
		$this->load->view('profil/editprofil');
		$this->load->view('footer');
	}

	function profile()
	{
		$data=array(
			'nama' =>$this->input->post('nama',TRUE),
			'username' =>$this->input->post('username',TRUE),
			'password' =>$this->input->post('password',TRUE),
			'nim' =>$this->input->post('nim',TRUE),
			'jurusan' =>$this->input->post('jurusan',TRUE),
			'email' =>$this->input->post('email',TRUE),
			'tlp' =>$this->input->post('tlp',TRUE),
		);
		$result=$this->App_model->Update_user_data($this->session->userdata('id'),$data);
		if($result>0){
			$data_session=array(
				'nama'    =>$id['nama'],
				'username'=>$data['username'],
				'password'=>$data['password'],
				'level'   =>$data['level'],
				'nim'			=>$data['nim'],
				'jurusan'	=>$data['jurusan'],
				'email'		=>$data['email'],
				'tlp'			=>$data['tlp']);
				$this->session->set_userdata($data_session);


			$this->session->set_flashdata('success_msg','User Profile Update');
			return redirect('Welcome/profile');
		}else{
			$this->session->set_flashdata('error_msg','User Profile Gagal Update');
			return redirect('Welcome/profile');
		}
	}

	function index()
	{
		$this->load->view('login');
	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
