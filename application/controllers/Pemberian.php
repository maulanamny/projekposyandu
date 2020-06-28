<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemberian extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataPemberian()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_beri=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_beri','id_beri',$id_beri)->row();
			$data['detail']['id_beri']= $tampil->id_beri;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['jns_pemberian']= $tampil->jns_pemberian;
			$data['content']='Pemberian/VFormUpdatePemberian';
		}
		else
		{	
			$data['DataPemberian']=$this->MSudi->GetData('tbl_beri');
			$data['content']='Pemberian/VPemberian';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPemberian()
	{
		$data['content']='Pemberian/VFormAddPemberian';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPemberian()
	{
		 $add['id_beri']=$this->input->post('id_beri');
         	 $add['nama']= $this->input->post('nama');
         	 $add['jns_pemberian']= $this->input->post('jns_pemberian'); 
        	 $this->MSudi->AddData('tbl_beri',$add);
        	 redirect(site_url('Pemberian/DataPemberian'));
	}



	public function UpdateDataPemberian()
	{
		 $id_beri=$this->input->post('id_beri');
		 $update['nama']= $this->input->post('nama');
         	 $update['jns_pemberian']= $this->input->post('jns_pemberian');
          	 $this->MSudi->UpdateData('tbl_beri','id_beri',$id_beri,$update);
		 redirect(site_url('Pemberian/DataPemberian'));
	}


	public function DeleteDataPemberian()
	{
		 $id_beri=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_beri','id_beri',$id_beri);
        	 redirect(site_url('Pemberian/DataPemberian'));
	}

}