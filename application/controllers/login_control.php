<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  

class Login_control extends CI_Controller{
// pemanggilan konstruktor beserta pemanggilan library
	public function ___construct(){
		parent:: ___construct();
		 $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->model('models2');	  
		}

	//fungsi cek admin
		public function index()
		{
		
			$this->form_validation->set_rules('username','trim|required');
			$this->form_validation->set_rules('password','trim|required|min_length[6]|max_length[16]');
			
				if($this->form_validation->run() == false){
					
					$this->load->view('form');
				
				}else{
			
					$username= set_value('username');
					$password = set_value('password');
					$valid = $this->models2->validasi($username, $password);

					if($valid != false){
							$this->session->set_userdata('username',$username);
							$this->session->set_userdata('logged_in',true);
							$this->beranda();
							
					}else{
					$this->session->set_flashdata('error','<b class="text-danger">Masukkan username atau password dengan benar</b>');
					$this->load->view('form');
					}
				}
			
			}
			function index_view()
	{
		$this->load->helper('form');
		$this->load->view('index_view');
		
	}
		//tambah data
		  public function Tambah(){
		  	if($this->session->userdata('logged_in')){
			  $data['conten']='tambah_form';
			  $this->load->view('template',$data);
			 }else{
			 	$this->load->view('form');
			 }
		    }
		 //beranda
		  public function beranda(){
		  	if($this->session->userdata('logged_in')){
			  $data['conten']='adminhalaman';
			  $this->load->view('template',$data);
			 }else{
			 	$this->load->view('form');
			 }
		    }
	    //fungsi read artikel 
		public function index2(){
			$this->load->model('models_travel');
			if($this->session->userdata('logged_in')){
			$data['hasilTransaksi']=$this->models_travel->tampildata();
			$data['conten']='conten';
			$this->load->view('template',$data);
		    }else{
		    	$this->load->view('form');
		    }

	  	}
		
//--------------------------------------------------insert data artikel---------------------------------------
			 public function insert(){
			 	if($this->session->userdata('logged_in')){
					$this->form_validation->set_rules('judul','judul','trim|required');
					$this->form_validation->set_rules('tanggal','tanggal','trim|required');
					$this->form_validation->set_rules('jenis','jenis','trim|required');
					$this->form_validation->set_rules('isi','isi','trim|required');
				
					if($this->form_validation->run() == false){
						$this->index2();
					}else{
						$judul=set_value('judul');
						$tanggal=set_value('tanggal');
						$jenis=set_value('jenis');
						$isi=set_value('isi');
						$query = $this->models2->insert_database($judul,$tanggal,$jenis,$isi);
						
						if($query != false){
						 $this->index2();

						}else{
							$this->session->set_flashdata('error');
							$this->Tambah();
						}
					  }
				 	}else{
				 		 $this->load->view('form');
				 	}
				 }
		
//-------------------------------------------------Pengolahn edit dan update data artikel---------------------------------------
		public function edit($id){
			if($this->session->userdata('logged_in')){
			$data['conten']='formatedit';
			$data['editdata']= $this->models2->artikeledit($id);
			$this->load->view('template',$data);
		   }else{
		   	$this->load->view('form');

		   }
					
		}
		public function update($id){
			if($this->session->userdata('logged_in')){
			$this->form_validation->set_rules('judul','judul','trim|required');
			$this->form_validation->set_rules('tanggal','tanggal','trim|required');
			$this->form_validation->set_rules('jenis','jenis','trim|required');
			$this->form_validation->set_rules('isi','isi','trim|required');
				
				if($this->form_validation->run() == false){
				   $this->index2();
				}else{
					$update=array('judul'=>set_value('judul'),
								   'tanggal'=>set_value('tanggal'),
								   'jenis'=> set_value('jenis'),
								   'isi'=>set_value('isi')
								  );
					$query=$this->models2->aksiupdate($id,$update);
					if($query != false){
						$this->index2();
					}else{
						$this->index2();
					}
				}
			  }else{
				$this->load->view('form');
			}
				
			}
//----------------------------delete artikel---------------------------------------------
			public function delete($id){
				if($this->session->userdata('logged_in')){
				$query = $this->models2->aksidelete($id);
				if($query!=false){
					$this->index2();
				}else{
					$this->index2();
				}
			}else{
				
				$this->load->view('form');
				
			}

			}
//-------------------------- halaman menampilkan data seluruh admin--------------------------------
			public function hlmn_admin(){
		    $this->load->model('models_travel');
			if($this->session->userdata('logged_in')){
			$data['hasiladmin']=$this->models_travel->tampildata_admin();
			$data['conten']='read_admin';
			$this->load->view('template',$data);
			}else{
				$this->load->view('form');
			}
		}

		 
//----------------------- Pengolahan insert admin --------------------------------------------------
		//penampilan form register admin
		public function Tambah_admin(){
		 	if($this->session->userdata('logged_in')){
			  $data['conten']='form_admin';
			  $this->load->view('template',$data);
			 }else{
			 	$this->load->view('form');
			 }
		    }

		public function insert_admin(){
			if($this->session->userdata('logged_in')){
					
			$this->form_validation->set_rules('username','username','trim|required');
			$this->form_validation->set_rules('password','password','trim|required|min_length[6]|max_length[16]');
					
			if($this->form_validation->run() == false){
				$this->Tambah_admin();
			}else{
				$this->load->model('models_travel');
			    $username=set_value('username');
				$password=set_value('password');
				$query = $this->models_travel->insert_admin($username,$password);
				if($query != false){
					$this->hlmn_admin();
				}else{
					$this->session->set_flashdata('error');
					$this->Tambah_admin();
				}
			}
		}else{
			$this->load->view('form');
		}
	}
//---------------------------------- Pengolahan edit data  admin ------------------------------
		public function adminedit($id){
			if($this->session->userdata('logged_in')){
			$data['conten']='formeditadmin';
			$data['edit']= $this->models2->editadmin($id);
			$this->load->view('template',$data);
			}else{
				$this->load->view('form');
			}		
		}

		public function update_admin($id){
			if($this->session->userdata('logged_in')){
			$this->form_validation->set_rules('username','username','trim|required');
			$this->form_validation->set_rules('password','password','trim|required|min_length[6]|max_length[16]');
				
				if($this->form_validation->run() == false){
					echo"gagal";
				}else{
					$update2=array('username'=> set_value('username'),
								  'password'=>set_value('password'));
					$query=$this->models2->aksiupdateadmin($id,$update2);
					if($query != false){
						$this->hlmn_admin();
					}

				}
				
			  }else{
			  	$this->load->view('form');
			  }
			}
//-------------------------delete admin----------------------------------
			public function deleteadmin($id){
			if($this->session->userdata('logged_in')){
			$query = $this->models2->aksideleteadmin($id);
			if($query!=false){
				$this->hlmn_admin();
			}else{
				$this->load->view('form');
			}
		}
		}
//------------------------fungsi logout---------------------------
		public function logout(){
			$query = $this->models2->aksilogout();
			if($query!=false){
				$this->load->view('form');
			}
		}
//-------------------operasi read------------------------
		function edukasi()
	      {
		$this->load->helper('form');
		$data['isi'] = $this->models2->getdata();
		$this->load->view('edukasi',$data);	
	
	     }
//----------------------------tampil artikel--------------------------------------
		 function wahana()
	{
		
		$this->load->model('wahana');
		$data['isi'] = $this->wahana->getdata();
		$this->load->view('wahana', $data);
	}
	function pantai()
	{
		$this->load->model('pantai');
		$data['isi'] = $this->pantai->getdata();
		$this->load->view('pantai', $data);
	}
	function agrowisata()
	{
		$this->load->model('agrowisata');
		$data['isi'] = $this->agrowisata->getdata();
		$this->load->view('agrowisata', $data);
	}
	function air()
	{
		$this->load->model('air');
		$data['isi'] = $this->air->getdata();
		$this->load->view('air', $data);
	}
	function sejarah()
	{
		$this->load->model('sejarah');
		$data['isi'] = $this->sejarah->getdata();
		$this->load->view('sejarah', $data);
	
	}
	function alam()
	{
		$this->load->model('alam');
		$data['isi'] = $this->alam->getdata();
		$this->load->view('alam', $data);
	}
	function religi()
	{
		$this->load->model('religi');
		$data['isi'] = $this->religi->getdata();
		$this->load->view('religi', $data);
	}
	function popular()
	{
		$this->load->model('popular');
		$data['isi'] = $this->popular->getdata();
		$this->load->view('popular', $data);
	}
	
	
	function tips()
	{
		$this->load->model('tips');
		$data['isi'] = $this->tips->getdata();
		$this->load->view('tips', $data);
	}
	
	function team()
	{
		$this->load->view('team');
	}
	
	//----------------tampil data artikel berdasarkan jenis-----------------------
	//tampil form select
	public function jenisdata(){
		$data['conten']='jenisdata';
		$this->load->view('template',$data);
	}
	public function edukasiaksi(){
		if($this->session->userdata('logged_in')){
		$data['conten']='bacadata';
	    $data['baca']=$this->models2->tampiledukasi();
		$this->load->view('template',$data);
		
	}else{
		$this->load->view('form');
	}
}
		public function wahanaaksi(){
		 if($this->session->userdata('logged_in')){
			$data['conten']='bacadata';
		    $data['baca']=$this->models2->tampilwahana();
			$this->load->view('template',$data);
		
			}else{
				$this->load->view('form');
			}
		}

	public function agroaksi(){
		 if($this->session->userdata('logged_in')){
			$data['conten']='bacadata';
		    $data['baca']=$this->models2->tampilagro();
			$this->load->view('template',$data);
		
			}else{
				$this->load->view('form');
			}
		}
	public function airaksi(){
		 if($this->session->userdata('logged_in')){
			$data['conten']='bacadata';
		    $data['baca']=$this->models2->tampilair();
			$this->load->view('template',$data);
		
			}else{
				$this->load->view('form');
			}
		}
	public function sejarahaksi(){
		 if($this->session->userdata('logged_in')){
			$data['conten']='bacadata';
		    $data['baca']=$this->models2->tampilsejarah();
			$this->load->view('template',$data);
		
			}else{
				$this->load->view('form');
			}
		}

	public function alamaksi(){
		 if($this->session->userdata('logged_in')){
			$data['conten']='bacadata';
		    $data['baca']=$this->models2->tampilalam();
			$this->load->view('template',$data);
		
			}else{
				$this->load->view('form');
			}
		}
	public function religiaksi(){
		 if($this->session->userdata('logged_in')){
			$data['conten']='bacadata';
		    $data['baca']=$this->models2->tampilreligi();
			$this->load->view('template',$data);
		
			}else{
				$this->load->view('form');
			}
		}
	public function populeraksi(){
		 if($this->session->userdata('logged_in')){
			$data['conten']='bacadata';
		    $data['baca']=$this->models2->tampilpopuler();
			$this->load->view('template',$data);
		
			}else{
				$this->load->view('form');
			}
		}
		//---------------- Proses Pengolahan atau triger dari data Hotel -------------------------
	public function hlmn_hotel(){
		   
			if($this->session->userdata('logged_in')){
			$data['hotel']=$this->models2->tampildatahotel();
			$data['conten']='read_hotel';
			$this->load->view('template',$data);
			}else{
				
				$this->load->view('form');
			}
		}

	public function datahotel(){
		if($this->session->userdata('logged_in')){
			$data['conten']='uploud';
			$this->load->view('template',$data);
		}else{
			$this->load->view('form');
		}
	}

	public function inserthotel(){
		if($this->session->userdata('logged_in')){
		
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('jenis','jenis','trim|required');
		$this->form_validation->set_rules('isi','isi','trim|required');
	
		if($this->form_validation->run() == false){
			$this->hlmn_hotel();
		}else{
			$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './image/upload/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
            	 $gbr = $this->upload->data();
            	$nama=set_value('nama');
            	$jenis=set_value('jenis');
            	$isi=set_value('isi');
            	$foto= $gbr['file_name'];
               
            
               $query= $this->models2->get_insert($nama,$jenis,$isi,$foto); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
               if($query==true){
               	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                $this->hlmn_hotel();
               }
               
               // redirect('upload'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                $this->datahotel();
            }
        }
		}

	 }else{
    	$this->load->view('form');
    }
	
	}
	//edit data hotel
	public function edithotel($id){
			if($this->session->userdata('logged_in')){
			$data['conten']='formedithotel';
			$data['hoteledit']= $this->models2->edithotel($id);
			$this->load->view('template',$data);
		   }else{
		   	$this->load->view('form');

		   }
					
		}
		//update data hotel
		public function update_hotel($id){
		if($this->session->userdata('logged_in')){
		
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('jenis','jenis','trim|required');
		$this->form_validation->set_rules('isi','isi','trim|required');
	
		if($this->form_validation->run() == false){
			$this->datahotel();
		}else{
			$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './image/upload/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
            	 $gbr = $this->upload->data();
            	$nama=set_value('nama');
            	$jenis=set_value('jenis');
            	$isi=set_value('isi');
            	$foto= $gbr['file_name'];
				
				$data=array ('nama'=>$nama,
							  'jenis'=>$jenis,
							  'isi'=>$isi,
							  'foto'=>$foto);
               
            
               $query= $this->models2->get_update($id,$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
               if($query==true){
               $this->hlmn_hotel();
               	$this->session->set_flashdata("pesan2", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil update data !!</div></div>");
               }
               
               // redirect('upload'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan2", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal update data !!</div></div>");
                $this->datahotel();
            }
        }
		}

	 }else{
    	$this->load->view('form');
    }
				
		}
	//----------------------------delete data hotel ---------------------------------------------
			public function hoteldelete($id){
				if($this->session->userdata('logged_in')){
				$query = $this->models2->deletehotel($id);
				if($query!=false){
					$this->hlmn_hotel();
				}else{
					$this->hlmn_hotel();
				}
			}else{
				
				$this->load->view('form');
				
			}

	}
//------------------------------------------------- Tampil data hotel---------------------------------------

			public function villa(){
			
			$this->load->model('villa');
			$data['data_hotel']=$this->villa->villa();
			$this->load->view('villa',$data);
			
			}

			public function bintang1(){
			
			$this->load->model('bintang1');
			$data['data_hotel']=$this->bintang1->bacabintang1();
			$this->load->view('bintang1',$data);
			
			}

			public function bintang2(){
			
			$this->load->model('bintang2');
			$data['data_hotel']=$this->bintang2->bacabintang2();
			$this->load->view('bintang2',$data);
			
			}

			public function bintang3(){
			
			$this->load->model('bintang3');
			$data['data_hotel']=$this->bintang3->bacabintang3();
			$this->load->view('bintang3',$data);
			
			}

			public function bintang4(){
			
			$this->load->model('bintang4');
			$data['data_hotel']=$this->bintang4->bacabintang4();
			$this->load->view('bintang4',$data);
			
			}

			public function bintang5(){
			
			$this->load->model('bintang5');
			$data['data_hotel']=$this->bintang5->bacabintang5();
			$this->load->view('bintang5',$data);
			
			}


}
			
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */