<?php
 class Villa extends CI_Model
 {
  function villa(){
    $this->db->select('nama,isi,foto');
    $this->db->where('jenis','villa');
    $this->db->from('hotel');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $query[] = $data;
          

        }
          return $query;
      }
  }
}
?>