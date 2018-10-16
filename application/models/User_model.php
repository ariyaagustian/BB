<?php
class User_model extends CI_Model{
//VALIDATE AWAL LOGIN
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
  function simpan_user(){
        $simpan_data = array(
            'level'         => 2,
            'nama'          => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input-> post('password')),
            'nim'           => $this->input->post('nim'),
            'email'         => $this->input->post('email'),
            'jurusan'       => $this->input->post('jurusan'),
            'tlp'           => $this->input->post('tlp'),
            'status'        => 1 );
        $simpan = $this->db->insert('user', $simpan_data);
        return $simpan;
    }

//MELOAD SEMUA DATA USER
    function get_user_all(){
        $query=$this->db->query("SELECT * FROM user ORDER BY id DESC");
        return $query->result();
    }

//MENYIMPAN EDITAN BIODATA USER
        function simpan_edit_user( $nama,$level, $username, $password, $email, $nim,$jurusan,$tlp){
            $data = array(
                'nama'           => $nama,
                'username'       => $username,
                'password'       => $password,
                'email'          => $email,
                'nim'            => $nim,
                'jurusan'        => $jurusan,
                'tlp'            => $tlp  );
            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('user', $data);
        }

//MELOAD ISI TIMELINE DI SETIAP THREAD
    function getForumFillcount($id_thread=''){
  			$query=$this->db->query("SELECT * from timeline where id_thread='$id_thread'");
  			return $query->num_rows();
	  }

//MENGHAPUS SUATU USER BERDASAR ID
    function delete_user($id){
        $query=$this->db->delete('user',array('id'=>$id));
    }

//MELOAD DATA TABEL THREAD UNTUK AMBIL NAMANYA
    function thread($id_thread='')
      {
        $query = $this->db->query("select  * from thread
        ORDER BY id_thread ASC");
        if ($query->num_rows() > 0) {
        foreach ($query->result() as $data) {
          $menus[]=$data;
         }
        return $menus;
         }
       }

//MENYIMPAN SUATU POST KE DB
    function saveThread(){
        $id_thread=$this->input->post('id_thread');
        $isi=$this->input->post('isi');
        $judul=$this->input->post('judul');
        $type=$this->input->post('type');
        $matkul=$this->input->post('matkul');
        $datementor=$this->input->post('datementor');
        $deadline=$this->input->post('deadline');
        $feemin=$this->input->post('feemin');
        $feemax=$this->input->post('feemax');

        $data=array(
            'id_thread'=>$id_thread,
            'id'=>$this->session->userdata('id'),
            'isi'=>$isi,
            'judul'=>$judul,
            'type'=>$type,
            'matkul'=>$matkul,
            'datementor'=>$datementor,
            'deadline'=>$deadline,
            'feemin'=>$feemin,
            'feemax'=>$feemax,
            'tanggal'=>date("Y-m-d")  );
          $this->db->trans_start();
          $this->db->insert('timeline',$data);
          $this->db->trans_complete();
          redirect (base_url().'User_controller/thread/'.$id_timeline);
      }

//MELOAD DETAI DARI SUATU POST YG DI KLIK
    function getDetailForum($id_timeline=''){
      	$query=$this->db->query("select * ,user.nama from timeline left join user on user.id=timeline.id where timeline.id_timeline='$id_timeline' ");
      			 if ($query->num_rows() > 0) {
      				 foreach ($query->result() as $data) {
      					 $mdata[]=$data;
      			 }
      				 return $mdata;
      			}
  	}

//MELOAD SEMUA ISI TIMELINE
    function getForumFill($id_thread=''){
          $id=$this->session->userdata('username');
    			$query=$this->db->query("select *,user.nama,timeline.id_timeline as id_timeline from timeline left join user on user.id=timeline.id where id_thread='$id_thread' ORDER BY timeline.id_timeline ASC");
    			 if ($query->num_rows() > 0) {
    				  foreach ($query->result() as $data) {
    					  $mdata[]=$data;
    			    }
    			 	 return $mdata;
    			 }
	   }

//MELOAD TABEL TIMELINE
     function getProp($id_timeline=''){
  	      $query=$this->db->query("select * ,thread.nama as nama from timeline
  	      left join thread on thread.id_thread=timeline.id_timeline
  	      where id_timeline='$id_timeline'");
  	      return $query->row();
      }

//MELOAD komentar
function getFcontentComment($id_timeline=''){
  		$query=$this->db->query("SELECT *, user.nama from komentar
  		left join user on user.id=komentar.id
  		where komentar.id_timeline='$id_timeline'
  		ORDER BY komentar.id_komentar ASC");
  			 if ($query->num_rows() > 0) {
  				foreach ($query->result() as $data) {
  					$mdata[]=$data;
  				}
  				return $mdata;
  			}
	}

//MENYIMPAN SUATU KOMEN
      function saveComment($id_timeline=''){
      		$isi=$this->input->post('isi');
      		$data=array(
          		'id_timeline'=>$id_timeline,
          		'id'=>$this->session->userdata('id'),
          		'isi'=>$isi,
          		'tanggal'=>date("Y-m-d")	);
      		$this->db->trans_start();
      		$this->db->insert('komentar',$data);
      		$this->db->trans_complete();
          redirect (base_url().'User_controller/detailthread/'.$id_timeline.'/'.$id_timeline);
      }

//MELOAD TABEL UNTUK History
      function history($id='')  {
          $query=$this->db->query("select  * from timeline where id='$id' ORDER BY timeline.id_timeline ASC");
          return $query;
      }

}
