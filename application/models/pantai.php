<?php
 class pantai extends CI_Model
 {
   function getdata()
  {
  $this->db->where('jenis','pantai');
  $ambil = $this->db->get('edukasi');
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
