<?php
 class Bintang1 extends CI_Model
 {
  function bacabintang1(){
    $this->db->select('nama,isi,foto');
    $this->db->where('jenis','bintang 1');
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