<?php
 class Bintang2 extends CI_Model
 {
  function bacabintang2(){
    $this->db->select('nama,isi,foto');
    $this->db->where('jenis','bintang 2');
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