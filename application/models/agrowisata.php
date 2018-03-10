<?php
 class Agrowisata extends CI_Model
 {
  function getdata()
  {
  $this->db->where('jenis','agro');
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
