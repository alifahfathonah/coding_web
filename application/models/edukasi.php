<?php
 class edukasi extends CI_Model {
  function getdata()
  {
  $this->db->where('jenis','edukasi');
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
