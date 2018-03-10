<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Models_travel extends CI_Model {
	function __construct()
     {
          parent::__construct();
          //session_start();
         
     }
	

     public function tampildata(){
     	$this->db->select('id,judul, tanggal,jenis, isi');
     	$this->db->from('edukasi');
          //$this->db->limit(1);
     	$query2=$this->db->get();

     	if($query2->num_rows()>0){

     		foreach($query2->result() as $data){
     			
     			$hasilTransaksi[] = $data;
     			

     		}
     			return $hasilTransaksi;
     	}
     	
     }

     public function tampildata_admin(){
          $this->db->select('id, username, password');
          $this->db->from('admin');
          //$this->db->limit(1);
          $query2=$this->db->get();

          if($query2->num_rows()>0){

               foreach($query2->result() as $data){
                    
                    $hasiladmin[] = $data;
                    

               }
                    return $hasiladmin;
          }
          
     }

     public function insert_admin($username,$password)
     {
          $data = array( 'username'=>$username, 
                         'password'=>$password);
         $this->db->insert('admin',$data);
          
          return true;
     }
 }