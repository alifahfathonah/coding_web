<?php
 class Bintang4 extends CI_Model
 {
  function bacabintang4(){
    $this->db->select('nama,isi,foto');
    $this->db->where('jenis','bintang 4');
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