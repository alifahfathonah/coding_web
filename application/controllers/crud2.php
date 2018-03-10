<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud2 extends CI_Controller {
	public function ___construct(){
		parent::___construct();
		session_start();
		
	}
	
	public function index(){
		$this->load->model('models_travel');
		if($this->session->userdata('logged_in')){
		
		
		$data['hasilTransaksi']=$this->models_travel->tampildata();
		$data['conten']='conten';
		$this->load->view('template',$data);
	    }

  }
  

   
  


}