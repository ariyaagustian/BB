<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
/**
 	 * API Restfull
 	 * @author Indra Gunanda
	 */

class Api extends REST_Controller
{
    /**
 	 * Konstruktor
 	 * Konstruktor Berisi, pemuatan model "crud/main" dan "admin/car"  serta limitasi pengguna hanya untuk hak akses "admin"
 	 * @return json
	 */
    public $dpost = null;
    public $dget = null;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud/main");
        $this->dget = $this->input->get(null,true);
        $this->dpost = $this->input->post(null,true);
    }
    /**
 	 * Initial Method
 	 *
 	 * @return json
	 */

    public function index_post()
    {
        $this->response([], 404);
    }
    /**
   * Initial Method
   *
   * @return json
   */
    public function index_get()
    {
        $this->response([], 404);
    }
    /**
   * Initial Method
   *
   * @return json
   */
    public function index_put()
    {
        $this->response([], 404);
    }
    /**
   * Initial Method
   *
   * @return json
   */
    public function index_delete()
    {
        $this->response([], 404);
    }
    /**
 	 * Get Car
 	 * Memuat data Tracking Mobil
 	 * @return json
	 */
   public function test_get()
   {
     $joinData = [
       "table"=>"transaction",
       "join"=>[
         "user|transaction.id_user = user.id_user|null",
         "swapanchor|swapanchor.id_swapanchor = transaction.id_swapanchor|null",
       ]
     ];
     $this->main->setJoin($joinData);
     $res = $this->main->get(["transaction.id_transaction"=>"S180730001"]);
     $this->response($res->result());
   }

}
