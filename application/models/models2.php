<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Models2 extends CI_Model {
function __construct()
     {
          session_start();
          parent::__construct();
     }
     //pengecekkan username dan password dari database
  public function validasi($username, $password)
  {
    
    $this->db->select('username, password');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->limit(1);
    $hasil=$this->db->get();
            
    if($hasil->num_rows()>0){
      return $hasil->row();
    }else{
      return false;
    }
  }

  public function insert_database($judul,$tanggal,$jenis,$isi)
  {
    $data = array('judul'=>$judul, 
            'tanggal'=>$tanggal, 
            'jenis'=>$jenis,
            'isi'=>$isi);
      $this->db->insert('edukasi',$data);
    
    return true;
  }

  public function artikeledit($id){
    return $this->db->get_where('edukasi', array('id'=>$id))->row();
  
  }
  

  public function editadmin($id){
    return $this->db->get_where('admin', array('id'=>$id))->row();
  
  }

  public function aksiupdate($id,$query)
  {
    $this->db->where('id',$id);
    $this->db->update('edukasi',$query);
    return true;
  }
//delete artikel
  public function aksidelete($id){
     $this->db->where('id',$id);
     $this->db->delete('edukasi');
      return true;
  }

  public function aksiupdateadmin($id,$query)
  {
    $this->db->where('id',$id);
    $this->db->update('admin',$query);
    return true;
  }
  public function aksideleteadmin($id){
     $this->db->where('id',$id);
     $this->db->delete('admin');
      return true;
  }

  public function aksilogout(){
      $this->session->sess_destroy();
      return true;
  }
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
  //tampil data artikel sesuai jenis
  public function tampiledukasi(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','edukasi');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
    public function tampilwahana(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','wahana');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
  public function tampilagro(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','agro');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
     
  public function tampilair(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','air');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
  public function tampilsejarah(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','sejarah');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
   public function tampilalam(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','alam');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
    public function tampilreligi(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','religi');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
   public function tampilpopuler(){
    $this->db->select('id,judul, tanggal,jenis, isi');
    $this->db->where('jenis','populer');
      $this->db->from('edukasi');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $baca[] = $data;
          

        }
          return $baca;
      }
  }
  // method dibawah ini pengolahan data hotel mulai upload foto, dan isi
  // data nama,jenis,isi foto
  public function tampildatahotel(){
    $this->db->select('id,nama,jenis,isi,foto');
    $this->db->from('hotel');
      $query2=$this->db->get();

      if($query2->num_rows()>0){

        foreach($query2->result() as $data){
          
          $hotel[] = $data;
          

        }
          return $hotel;
      }
    }
    function get_insert($nama,$jenis,$isi,$foto){
        $data = array('nama'=>$nama, 
            'jenis'=>$jenis, 
            'isi'=>$isi,
            'foto'=>$foto);
       $this->db->insert('hotel', $data);
       return true;
    }
    public function edithotel($id){
    return $this->db->get_where('hotel', array('id'=>$id))->row();
    }

    public function get_update($id,$data)
    {
    $this->db->where('id',$id);
    $this->db->update('hotel',$data);
    return true;
   }

    public function deletehotel($id){
     $this->db->where('id',$id);
     $this->db->delete('hotel');
      return true;
  }
// Baca datahotel
   
}


