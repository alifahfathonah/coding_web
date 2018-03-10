<?php
 class travels extends CI_Model
 {
  function getdata()
  {
  $ambil = $this->db->get('travels');
  if($ambil->num_rows() > 0)
   {
   foreach($ambil->result() as $baris)
    {
     $hasil[] = $baris;
    }
    return $hasil;
   }
  }
 }
?>
